// Package deletes all "related" items in a CKAN instance. The portal has
// to be specified via parameter "portal" and the neccessary CKAN-API key
// has to be specified via environment variable CKANAUTH. The value of this
// environment variable will be used as a value for X-CKAN-API-Key to identify
// the user who will perform the API call.
package main

import (
	"encoding/json"
	"flag"
	"fmt"
	"io/ioutil"
	"log"
	"net/http"
	"os"
	"strings"
)

const deleterelatedapicall = "api/3/action/related_delete"
const relatedapicall = "api/3/action/related_list"

func main() {
	var related_json interface{}

	portal := flag.String("portal", "", "url to CKAN portal, eg. http://data.opendataportal.at/")
	flag.Parse()

	if portal == nil || len(*portal) == 0 {
		fmt.Println(`required parameter "portal" missing`)
		os.Exit(1)
	}

	allrelated, err := http.Get(*portal + relatedapicall)
	if err != nil {
		log.Fatal(err)
	}
	defer allrelated.Body.Close()

	body, err := ioutil.ReadAll(allrelated.Body)
	if err != nil {
		log.Fatal(err)
	}

	if err := json.Unmarshal(body, &related_json); err != nil {
		log.Fatal(err)
	}

	container := related_json.(map[string]interface{})
	results := container["result"].([]interface{})

	auth := os.Getenv("CKANAUTH")

	for i, v := range results {
		result := v.(map[string]interface{})
		id := result["id"].(string)

		// Probalby unneccessary to append the id as an url parameter,
		// as we are posting, but nice to see in the log
		dl := fmt.Sprintf("%s?id=%s", *portal+deleterelatedapicall, id)

		fmt.Printf("[%d] Deleting related item with id %v\n", i, id)
		id_json := fmt.Sprintf(`{"id": "%s"}`, id)
		req, err := http.NewRequest("POST", dl, strings.NewReader(id_json))
		if err != nil {
			fmt.Errorf("%s", err)
		}

		req.Header.Add("X-CKAN-API-Key", auth)
		req.Header.Set("Content-Type", "application/x-www-form-urlencoded")

		resp, err := http.DefaultClient.Do(req)
		if err != nil {
			fmt.Errorf("%s", err)
		}

		respbytes, err := ioutil.ReadAll(resp.Body)
		fmt.Printf("%s\n", string(respbytes))
		resp.Body.Close()
	}

	if len(results) == 0 {
		fmt.Println("Nothing to do")
	}
}
