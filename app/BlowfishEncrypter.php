<?php

declare(strict_types=1);

namespace App;

use phpseclib3\Crypt\Blowfish;
use Illuminate\Contracts\Encryption\Encrypter as EncrypterContract;

class BlowfishEncrypter implements EncrypterContract
{
    protected $encrypter;
    protected $key;

    public function __construct(string $key)
    {
        $this->key = $key;
        $this->encrypter = new Blowfish('ecb');
        $this->encrypter->setKey($this->key);
    }

    public function encrypt($value, $serialize = true)
    {
        return $this->encrypter->encrypt($value);
    }

    public function decrypt($payload, $unserialize = true)
    {
        //임시로 주석처리
        // return $this->encrypter->decrypt($payload);
    }

    public function getKey()
    {
        return $this->key;
    }


    //임시!!!
        public function getAllKeys()
    {
        // 모든 키를 반환하는 로직을 구현합니다.
        return ['your', 'keys', 'here'];
    }

    public function getPreviousKeys()
    {
        // 이전 키를 반환하는 로직을 구현합니다.
        return ['your', 'previous', 'keys', 'here'];
    }
}