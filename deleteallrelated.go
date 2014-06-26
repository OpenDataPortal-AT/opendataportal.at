package main

import (
	"encoding/json"
	"fmt"
	"io/ioutil"
	"log"
	"net/http"
	"os"
	"strings"
)

func main() {
	var related_json interface{}
	var deleterelatedapiurl = "http://data.opendataportal.at/api/3/action/related_delete"

	allrelated, err := http.Get("http://data.opendataportal.at/api/3/action/related_list")
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
		dl := fmt.Sprintf("%s?id=%s", deleterelatedapiurl, id)

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
}
