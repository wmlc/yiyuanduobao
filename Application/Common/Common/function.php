<?php
//获取GMTime
function get_gmtime()
{
    return (time() - date('Z'));
}

function valid_tag($str)
{

    return preg_replace("/<(?!div|ol|ul|li|sup|sub|span|br|img|p|h1|h2|h3|h4|h5|h6|\/div|\/ol|\/ul|\/li|\/sup|\/sub|\/span|\/br|\/img|\/p|\/h1|\/h2|\/h3|\/h4|\/h5|\/h6|blockquote|\/blockquote|strike|\/strike|b|\/b|i|\/i|u|\/u)[^>]*>/i","",$str);
}

//生成订单号
function to_date($utc_time, $format = 'Y-m-d H:i:s') {
    if (empty ( $utc_time )) {
        return '';
    }
    $timezone = intval('8');
    $time = $utc_time + $timezone * 3600;
    return date ($format, $time );
}