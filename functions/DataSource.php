<?php

    namespace Phppot;

class DataSource
{

    const HOST = 'localhost';
    const USERNAME = 'root';
    const passwordWORD = '';
    const DATABASENAME = 'togetsuite_bar';
    private $conn;

   
    function __construct()
    {
        $this->conn = $this->getConnection();
    }

    /**
     * If connection object is needed use this method and get access to it.
     * Otherwise, use the below methods for insert / update / etc.
     *
     * @return \mysqli
     */
    public function getConnection()
    {
        $conn = new \mysqli(self::HOST, self::USERNAME, self::passwordWORD, self::DATABASENAME);

        if (mysqli_connect_errno()) {
            trigger_error("Problem with connecting to database.");
        }

        $conn->set_charset("utf8");
        return $conn;
    }

    /**
     * To get database results 'Matières'
     *
     * @param string $query
     * @param string $paramType
     * @param array $paramArray
     * @return array
     */
    public function select($query, $paramType = "", $paramArray = array()){
        $stmt = $this->conn->prepare($query);

        if (! empty($paramType) && ! empty($paramArray)) {

            $this->bindQueryParams($stmt, $paramType, $paramArray);
        }
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultset[] = $row;
            }
        }

        if (! empty($resultset)) {
            return $resultset;
        }
    }

    /**
     * To insert
     *
     * @param string $query
     * @param string $paramType
     * @param array $paramArray
     * @return int
     */
    public function insert($query, $paramType, $paramArray){
        $stmt = $this->conn->prepare($query);
        $this->bindQueryParams($stmt, $paramType, $paramArray);

        $stmt->execute();
        $insertId = $stmt->insert_id;
        return $insertId;
    }

    /**
     * To execute query
     *
     * @param string $query
     * @param string $paramType
     * @param array $paramArray
     */
    public function execute($query, $paramType = "", $paramArray = array()){
        $stmt = $this->conn->prepare($query);

        if (! empty($paramType) && ! empty($paramArray)) {
            $this->bindQueryParams($stmt, $paramType, $paramArray);
        }
        $stmt->execute();
    }

    /**
     * 1.
     * Prepares parameter binding
     * 2. Bind prameters to the sql statement
     *
     * @param string $stmt
     * @param string $paramType
     * @param array $paramArray
     */
    public function bindQueryParams($stmt, $paramType, $paramArray = array()){
        $paramValueReference[] = & $paramType;
        for ($i = 0; $i < count($paramArray); $i ++) {
            $paramValueReference[] = & $paramArray[$i];
        }
        call_user_func_array(array(
           $stmt,
            'bind_param'
        ), $paramValueReference);
    }

    /**
     * To get database results
     *
     * @param string $query
     * @param string $paramType
     * @param array $paramArray
     * @return array
     */
    public function getRecordCount($query, $paramType = "", $paramArray = array()){
        $stmt = $this->conn->prepare($query);
        if (! empty($paramType) && ! empty($paramArray)) {

            $this->bindQueryParams($stmt, $paramType, $paramArray);
        }
        $stmt->execute();
        $stmt->store_result();
        $recordCount = $stmt->num_rows;

        return $recordCount;
    }













    //Etudiant

    /**
     * To get database results 'Matières'
     *
     * @param string $queryEtu
     * @param string $paramTypeEtu
     * @param array $paramArrayEtu
     * @return array
     */
    public function selectEtu($queryEtu, $paramTypeEtu = "", $paramArrayEtu = array()){
        $stmtEtu = $this->conn->prepare($queryEtu);

        if (! empty($paramTypeEtu) && ! empty($paramArrayEtu)) {

            $this->bindQueryParams($stmtEtu, $paramTypeEtu, $paramArrayEtu);
        }
        $stmtEtu->execute();
        $result = $stmtEtu->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultset[] = $row;
            }
        }

        if (! empty($resultset)) {
            return $resultset;
        }
    }

    /**
     * To insertEtu
     *
     * @param string $queryEtu
     * @param string $paramTypeEtu
     * @param array $paramArrayEtu
     * @return int
     */
    public function insertEtu($queryEtu, $paramTypeEtu, $paramArrayEtu){
        $stmtEtu = $this->conn->prepare($queryEtu);
        $this->bindQueryParams($stmtEtu, $paramTypeEtu, $paramArrayEtu);

        $stmtEtu->execute();
        $insertId = $stmtEtu->insert_id;
        return $insertId;
    }

     /**
     * To execute queryEtu 
     *
     * @param string $queryEtu
     * @param string $paramTypeEtu
     * @param array $paramArrayEtu
     */
    public function executeEtu($queryEtu, $paramTypeEtu = "", $paramArrayEtu = array()){
        $stmtEtu = $this->conn->prepare($queryEtu);

        if (! empty($paramTypeEtu) && ! empty($paramArrayEtu)) {
            $this->bindQueryParams($stmtEtu, $paramTypeEtu, $paramArrayEtu);
        }
        $stmtEtu->execute();
    }

     /**
     * 1.
     * Prepares parameter binding
     * 2. Bind prameters to the sql statement
     *
     * @param string $stmtEtu
     * @param string $paramTypeEtu
     * @param array $paramArrayEtu
     */
    public function bindQueryParamsEtu($stmtEtu, $paramTypeEtu, $paramArrayEtu = array()){
        $paramValueReferenceEtu[] = & $paramTypeEtu;
        for ($i = 0; $i < count($paramArrayEtu); $i ++) {
            $paramValueReferenceEtu[] = & $paramArrayEtu[$i];
        }
        call_user_func_array(array(
           $stmtEtu,
            'bind_param'
        ), $paramValueReferenceEtu);
    }

    /**
     * To get database results
     *
     * @param string $queryEtu
     * @param string $paramTypeEtu
     * @param array $paramArrayEtu
     * @return array
     */
    public function getRecordCountEtu($queryEtu, $paramTypeEtu = "", $paramArrayEtu = array()){
        $stmtEtu = $this->conn->prepare($queryEtu);
        if (! empty($paramTypeEtu) && ! empty($paramArrayEtu)) {

            $this->bindQueryParams($stmtEtu, $paramTypeEtu, $paramArrayEtu);
        }
        $stmtEtu->execute();
        $stmtEtu->store_result();
        $recordCount = $stmtEtu->num_rows;

        return $recordCount;
    }










     //Evaluation
    /**
     * To get database results 'Evaluation'
     *
     * @param string $queryEval
     * @param string $paramTypeEval
     * @param array $paramArrayEval
     * @return array
     */
    public function selectEval($queryEval, $paramTypeEval = "", $paramArrayEval = array()){
        $stmtEval = $this->conn->prepare($queryEval);

        if (! empty($paramTypeEval) && ! empty($paramArrayEval)) {

            $this->bindQueryParams($stmtEval, $paramTypeEval, $paramArrayEval);
        }
        $stmtEval->execute();
        $result = $stmtEval->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultset[] = $row;
            }
        }
        if (! empty($resultset)) {
            return $resultset;
        }
    }

     /**
     * To insertEval
     *
     * @param string $queryEval
     * @param string $paramTypeEval
     * @param array $paramArrayEval
     * @return int
     */
    public function insertEval($queryEval, $paramTypeEval, $paramArrayEval){
        $stmtEval = $this->conn->prepare($queryEval);
        $this->bindQueryParams($stmtEval, $paramTypeEval, $paramArrayEval);

        $stmtEval->execute();
        $insertId = $stmtEval->insert_id;
        return $insertId;
    }

    /**
     * To execute queryEval
     *
     * @param string $queryEval
     * @param string $paramTypeEval
     * @param array $paramArrayEval
     */
    public function executeEval($queryEval, $paramTypeEval = "", $paramArrayEval = array()){
        $stmtEval = $this->conn->prepare($queryEval);

        if (! empty($paramTypeEval) && ! empty($paramArrayEval)) {
            $this->bindQueryParams($stmtEval, $paramTypeEval, $paramArrayEval);
        }
        $stmtEval->execute();
    }

    /**
     * 1.
     * Prepares parameter binding
     * 2. Bind prameters to the sql statement
     *
     * @param string $stmtEval
     * @param string $paramTypeEval
     * @param array $paramArrayEval
     */
    public function bindQueryParamsEval($stmtEval, $paramTypeEval, $paramArrayEval = array())
    {
        $paramValueReferenceEval[] = & $paramTypeEval;
        for ($i = 0; $i < count($paramArrayEval); $i ++) {
            $paramValueReferenceEval[] = & $paramArrayEval[$i];
        }
        call_user_func_array(array(
           $stmtEval,
            'bind_param'
        ), $paramValueReferenceEval);
    }

    /**
     * To get database results
     *
     * @param string $queryEval
     * @param string $paramTypeEval
     * @param array $paramArrayEval
     * @return array
     */
    public function getRecordCountEval($queryEval, $paramTypeEval = "", $paramArrayEval = array())
    {
        $stmtEval = $this->conn->prepare($queryEval);
        if (! empty($paramTypeEval) && ! empty($paramArrayEval)) {

            $this->bindQueryParams($stmtEval, $paramTypeEval, $paramArrayEval);
        }
        $stmtEval->execute();
        $stmtEval->store_result();
        $recordCount = $stmtEval->num_rows;

        return $recordCount;
    }








    //Semestre
    /**
     * To get database results 'EvaluationAnneeSem'
     *
     * @param string $queryAnneeSem
     * @param string $paramTypeAnneeSem
     * @param array $paramArrayAnneeSem
     * @return array
     */
    public function selectAnneeSem($queryAnneeSem, $paramTypeAnneeSem = "", $paramArrayAnneeSem = array())
    {
        $stmtAnneeSem = $this->conn->prepare($queryAnneeSem);

        if (! empty($paramTypeAnneeSem) && ! empty($paramArrayAnneeSem)) {

            $this->bindQueryParams($stmtAnneeSem, $paramTypeAnneeSem, $paramArrayAnneeSem);
        }
        $stmtAnneeSem->execute();
        $result = $stmtAnneeSem->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultset[] = $row;
            }
        }
        if (! empty($resultset)) {
            return $resultset;
        }
    }

    //Semestre
    /**
     * To get database results 'EvaluationAnneeSem'
     *
     * @param string $queryAnneeSem
     * @param string $paramTypeAnneeSem
     * @param array $paramArrayAnneeSem
     * @return array
     */
    public function selectFiliere($queryAnneeSem, $paramTypeAnneeSem = "", $paramArrayAnneeSem = array())
    {
        $stmtAnneeSem = $this->conn->prepare($queryAnneeSem);

        if (! empty($paramTypeAnneeSem) && ! empty($paramArrayAnneeSem)) {

            $this->bindQueryParams($stmtAnneeSem, $paramTypeAnneeSem, $paramArrayAnneeSem);
        }
        $stmtAnneeSem->execute();
        $result = $stmtAnneeSem->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultset[] = $row;
            }
        }
        if (! empty($resultset)) {
            return $resultset;
        }
    }





    //Releve
    /**
     * To get database results 'Relevé'
     *
     * @param string $queryReleve
     * @param string $paramTypeReleve
     * @param array $paramArrayReleve
     * @return array
     */
    public function selectReleve($queryReleve, $paramTypeReleve = "", $paramArrayReleve = array())
    {
        $stmtReleve = $this->conn->prepare($queryReleve);

        if (! empty($paramTypeReleve) && ! empty($paramArrayReleve)) {

            $this->bindQueryParams($stmtReleve, $paramTypeReleve, $paramArrayReleve);
        }
        $stmtReleve->execute();
        $result = $stmtReleve->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultset[] = $row;
            }
        }
        if (! empty($resultset)) {
            return $resultset;
        }
    }

    /**
     * To insertMat
     *
     * @param string $queryMat
     * @param string $paramTypeMat
     * @param array $paramArrayMat
     * @return int
     */
    public function insertMat($queryMat, $paramTypeMat, $paramArrayMat){
        $stmtMat = $this->conn->prepare($queryMat);
        $this->bindQueryParams($stmtMat, $paramTypeMat, $paramArrayMat);

        $stmtMat->execute();
        $insertId = $stmtMat->insert_id;
        return $insertId;
    }


     /**
     * To insertUE
     *
     * @param string $queryUE
     * @param string $paramTypeUE
     * @param array $paramArrayUE
     * @return int
     */
    public function insertUE($queryUE, $paramTypeUE, $paramArrayUE){
        $stmtUE = $this->conn->prepare($queryUE);
        $this->bindQueryParams($stmtUE, $paramTypeUE, $paramArrayUE);

        $stmtUE->execute();
        $insertId = $stmtUE->insert_id;
        return $insertId;
    }
    

   
}