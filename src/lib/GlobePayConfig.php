<?php

namespace globepay\lib;
/**
 *    配置账号信息
 * @author Leijid
 */
class GlobePayConfig
{
    //=======【基本信息设置】=====================================
    //
    /**
     * TODO: 修改这里配置为您自己申请的商户信息
     * GlobePay信息配置
     *
     * PARTNER_CODE: 绑定支付的PARTNER_CODE（必须配置）
     * CREDENTIAL_CODE: 系统为商户分配的开发校验码
     *
     */
    const PARTNER_CODE = 'PINE';
    const CREDENTIAL_CODE = 'xOjMTaG0Tk7fqNYjsNqDKXtJvE9MFCqC';

    //=======【curl代理设置】===================================
    /**
     * TODO：这里设置代理机器，只有需要代理的时候才设置，不需要代理，请设置为0.0.0.0和0
     * 本例程通过curl使用HTTP POST方法，此处可修改代理服务器，
     * 默认CURL_PROXY_HOST=0.0.0.0和CURL_PROXY_PORT=0，此时不开启代理（如有需要才设置）
     * @var unknown_type
     */
    const CURL_PROXY_HOST = "0.0.0.0";//"192.168.0.1";
    const CURL_PROXY_PORT = 0;//8080;
}
