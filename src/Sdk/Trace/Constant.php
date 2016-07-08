<?php
/**
 * Created by IntelliJ IDEA.
 * User: Demon
 * Date: 16/6/3
 * Time: 下午3:56
 */

namespace Zan\Framework\Sdk\Trace;


class Constant
{
    const SUCCESS = '0';

    /******************** TYPE ******************/
    const NOVA = "Nova";
    const HTTP = "Http";
    const REMOTE_CALL = "RemoteCall";
    const SQL = "SQL";
    const HTTP_CALL = "HttpCall";

    /******************Event Type ******************/
    const NOVA_PROCCESS = 'Nova.Proccess.Event';
    const POST = "POST";
    const GET = "GET";
}