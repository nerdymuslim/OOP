<?php
class Database
{
    //define a Properties or attritubes (Variable)
    public $dbConnection;
    public $records;

    //define methods(Functions)

    //This function can be used to open the connection to the db
    function openConnection(): bool
    {
    }
    //This function can be used to fetch records from the db
    function fetchRecord($id): array
    {
    }
    //This function can be used to insert records into the db

    function insertRecords($data)
    {
    }

    //This function can be used to update records from the db

    function updateRecords($id, $data)
    {
    }
    //This function can be used to delete records from the db

    function deleteRecords($id)
    {
    }
}
