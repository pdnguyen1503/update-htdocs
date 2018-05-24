<?php
require_once 'config.php';

class DbDriver {
	// Biến lưu trữ kết nối
	public $connect;

	function __construct() {
		$this->connect();
	}

	// Hàm Kết Nối
	function connect() {
		// Nếu chưa kết nối thì thực hiện kết nối
		if ( ! $this->connect ) {
			// Kết nối
			$this->connect = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );

			/* check connection */
			if ( $this->connect->connect_errno ) {
				die( 'Connect failed:' . $this->connect->connect_error );
			}
			// Xử lý truy vấn UTF8 để tránh lỗi font
			$this->connect->query( "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'" );
		}
	}

	// Hàm Ngắt Kết Nối
	function dis_connect() {
		// Nếu đang kết nối thì ngắt
		if ( $this->connect ) {
			$this->connect->close();
		}
	}

	// Hàm Insert
	function insert( $table, $data ) {
		// Kết nối
		$this->connect();

		// Lưu trữ danh sách field
		$field_list = '';
		// Lưu trữ danh sách giá trị tương ứng với field
		$value_list = '';

		// Lặp qua data
		foreach ( $data as $key => $value ) {
			$field_list .= ",$key";
			$value_list .= ",'" .( $value ) . "'";
		}

		// Vì sau vòng lặp các biến $field_list và $value_list sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
		$sql = 'INSERT INTO ' . $table . '(' . trim( $field_list, ',' ) . ') VALUES (' . trim( $value_list, ',' ) . ')';

		return $this->connect->query( $sql );
	}

	// Hàm Update
	function update( $table, $data, $where ) {
		// Kết nối
		$this->connect();
		$sql = '';
		// Lặp qua data
		foreach ( $data as $key => $value ) {
			$sql .= "$key = '" . ( $value ) . "',";
		}

		// Vì sau vòng lặp biến $sql sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
		$sql = 'UPDATE ' . $table . ' SET ' . trim( $sql, ',' ) . ' WHERE ' . $where;

		return $this->connect->query( $sql );
	}

	// Hàm delete
	function remove( $table, $where ) {
		// Kết nối
		$this->connect();

		// Delete
		$sql = "DELETE FROM $table WHERE $where";

		return $this->connect->query( $sql );
	}

	// Hàm lấy danh sách
	function get_list( $sql ) {
		// Kết nối
		$this->connect();

		$result = $this->connect->query( $sql );

		if ( ! $result ) {
			die ( 'Câu truy vấn bị sai' );
		}

		$return = array();

		// Lặp qua kết quả để đưa vào mảng
		while ( $row = $result->fetch_object() ) {
			$return[] = $row;
		}

		return $return;
	}

	// Hàm lấy 1 record dùng trong trường hợp lấy chi tiết tin
	function get_row( $sql ) {
		// Kết nối
		$this->connect();
		$result = $this->connect->query( $sql );

		if ( ! $result ) {
			die ( 'Câu truy vấn bị sai' );
		}
		$row = $result->fetch_object();
		// Xóa kết quả khỏi bộ nhớ
		$result->free();
		if ( $row ) {
			return $row;
		}

		return null;
	}
}