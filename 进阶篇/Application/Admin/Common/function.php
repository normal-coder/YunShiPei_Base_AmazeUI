<?php
function checkStatus($status)
{
	switch ($status) {
		case 1:
			return " <div class='am-text-success'><span class='am-icon-check'></span> 启用</div>";
			break;
		case 0:
			return " <div class='am-text-warning'><span class='am-icon-times'></span> 禁用</div>";
			break;
		default:
			return "未知";
			break;
	}
}
?>