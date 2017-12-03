<?php

/**
 *
 */
class Connect
{
    public $_host = 'localhost';
    public $_user = 'root';
    public $_pass = '';
    public $_db = 'utt_computer';
    public $_cnn;

    function __construct()
    {
        $this->_cnn = new mysqli($this->_host, $this->_user, $this->_pass, $this->_db);
        $this->_cnn->query("SET NAMES utf8");
    }

    function insert($table, $data)
    {
        $sql = "INSERT INTO `{$table}`";
        $col = array();
        $vcol = array();
        foreach ($data as $key => $value) {
            $col[] = "`" . $key . "`";
            $vcol[] = "N'" . $value . "'";
        }
        $col = "(" . implode(",", $col) . ")";
        $vcol = "(" . implode(",", $vcol) . ")";
        $sql .= $col . " VALUE " . $vcol;
        $query = $this->_cnn->query($sql);
        if (!$query) {
            echo mysqli_error($this->_cnn);
            echo $sql;
        }

    }
    function getlastid()
    {
         return mysqli_insert_id($this->_cnn);
    }

    function update($table, $data_update, $conditions = '')
    {
        $sql = "UPDATE `{$table}` SET ";
        $data_update_col = array();
        foreach ($data_update as $key => $value) {
            $data_update_col[] = "`" . $key . "`=N'" . $value . "'";
        }
        $data_update_col = implode(",", $data_update_col);
        $sql .= $data_update_col;
        if ($conditions != '') {
            $sql .=  " WHERE " . $conditions;
        }
        $query = $this->_cnn->query($sql);
        if (!$query) {
            echo mysqli_error($this->_cnn);
            echo $sql;
        }
    }

    function delete($table, $condition)
    {
        $sql = "DELETE FROM `{$table}` WHERE " . $condition;
        $query = $this->_cnn->query($sql);
        if (!$query) {
            echo mysqli_error($this->_cnn);
        }
    }

    function select($table, $cols = '*', $condition = '',$limit = '')
    {
        if (is_array($cols)) {
            $cols = implode(",", $cols);
        }
        $sql = "SELECT {$cols} FROM {$table} ";
        if ($condition != '') {
            $sql .= " WHERE " . $condition;
        }
        if ($limit != '') {
            $sql .= " LIMIT " . $limit;
        }
        $data = array();
        $result = $this->_cnn->query($sql);
        if (!$result) {
            echo mysqli_error($this->_cnn);
            echo $sql;
        } else {
            while ($row = $result->fetch_array()) {
                $data[] = $row;
            }
        }
        return $data;
    }
}