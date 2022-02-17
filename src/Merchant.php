<?php

namespace Stone\HmpayAgent;

use Stone\HmpayAgent\Exceptions\HttpException;
use Stone\HmpayAgent\Exceptions\InvalidArgumentException;

class Merchant extends Api
{
    /**
     * 图片上传
     * @param string $pic_type 图片类型
     * @param string $pic_file 上传文件(不参与签名)
     * @return mixed
     * @throws InvalidArgumentException|HttpException|Exceptions\HmpayAgentException
     */
    public function upload(string $pic_type, string $pic_file)
    {
        if (!file_exists($pic_file) || !is_readable($pic_file)) {
            throw new InvalidArgumentException(sprintf("File does not exist, or the file is unreadable: '%s'", $pic_file));
        }

        return $this->uploadPic($pic_type, $pic_file);
    }

    /**
     * 通用数据请求接口
     * @param string $method 方法名
     * @param array $params 请求参数
     * @return mixed
     * @throws HttpException|Exceptions\HmpayAgentException
     */
    public function postData(string $method, array $params)
    {
        return $this->request($method, $params);
    }
}