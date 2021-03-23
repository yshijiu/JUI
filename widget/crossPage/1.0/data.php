<?php
$draw = empty($_POST['pageIndex']) ? $_GET['pageIndex'] : $_POST['pageIndex'];


if ($draw) {
	switch ($draw) {
		case '1':
			$json = '{"data":[{"id":1,"name":"app","pass":"BDASU451545SD5F","contacts":"张三"},{"id":2,"name":"baidu","pass":"BDASU42332sSD5F","contacts":"李四"},{"id":3,"name":"wap","pass":"BDASU42332sSD5F","contacts":"王五"},{"id":1,"name":"app","pass":"BDASU451545SD5F","contacts":"张三"},{"id":2,"name":"baidu","pass":"BDASU42332sSD5F","contacts":"李四"},{"id":3,"name":"wap","pass":"BDASU42332sSD5F","contacts":"王五"},{"id":1,"name":"app","pass":"BDASU451545SD5F","contacts":"张三"},{"id":2,"name":"baidu","pass":"BDASU42332sSD5F","contacts":"李四"},{"id":3,"name":"wap","pass":"BDASU42332sSD5F","contacts":"王五"},{"id":10,"name":"wap","pass":"BDASU42332sSD5F","contacts":"老六"}],"total":102}';
			break;
		default:
			$json = '{"data":[{"id":11,"name":"web","pass":"asfsfsdsdswwed","contacts":"张三"},{"id":12,"name":"baidu","pass":"vssdsdsdsdsd","contacts":"王五"},{"id":3,"name":"wap","pass":"BDASU42332sSD5F","contacts":"王五"},{"id":1,"name":"app","pass":"BDASU451545SD5F","contacts":"张三"},{"id":2,"name":"baidu","pass":"BDASU42332sSD5F","contacts":"李四"},{"id":3,"name":"wap","pass":"BDASU42332sSD5F","contacts":"王五"},{"id":1,"name":"app","pass":"BDASU451545SD5F","contacts":"张三"},{"id":2,"name":"baidu","pass":"BDASU42332sSD5F","contacts":"李四"},{"id":3,"name":"wap","pass":"BDASU42332sSD5F","contacts":"王五"},{"id":10,"name":"wap","pass":"BDASU42332sSD5F","contacts":"老六"}],"total":102}';
			break;
	}
} else {	
	$json = $json = '{"data":[{"id":111,"name":"web","pass":"232323232323","contacts":"张三"},{"id":2222,"name":"baidu","pass":"7878787878787","contacts":"王五"},{"id":3232,"name":"wap","pass":"7878787878743","contacts":"王五"},{"id":1,"name":"app","pass":"1212121212121","contacts":"张三"},{"id":2,"name":"baidu","pass":"65656565656565","contacts":"李四"},{"id":3,"name":"wap","pass":"BDASU42332sSD5F","contacts":"王五"},{"id":1,"name":"app","pass":"BDASU451545SD5F","contacts":"张三"},{"id":2,"name":"baidu","pass":"BDASU42332sSD5F","contacts":"李四"},{"id":3,"name":"wap","pass":"BDASU42332sSD5F","contacts":"王五"},{"id":10,"name":"wap","pass":"BDASU42332sSD5F","contacts":"老六"}],"total":102}';
}


exit($json);


?>