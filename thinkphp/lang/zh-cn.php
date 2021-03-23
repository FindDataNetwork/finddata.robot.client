<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 核心中文语言包
return [
    // 系统错误提示
    'Undefined variable'                                        => 'Undefined variable',
    'Undefined index'                                           => 'Undefined variable',
    'Undefined offset'                                          => 'Undefined offset',
    'Parse error'                                               => 'Parse error',
    'Type error'                                                => 'Type error',
    'Fatal error'                                               => 'Fatal error',
    'syntax error'                                              => 'syntax error',

    // 框架核心错误提示
    'dispatch type not support'                                 => 'dispatch type not support',
    'method param miss'                                         => 'method param miss',
    'method not exists'                                         => 'method not exists',
    'module not exists'                                         => 'module not exists',
    'controller not exists'                                     => 'controller not exists',
    'class not exists'                                          => 'class not exists',
    'property not exists'                                       => 'property not exists',
    'template not exists'                                       => 'template not exists',
    'illegal controller name'                                   => 'illegal controller name',
    'illegal action name'                                       => 'illegal action name',
    'url suffix deny'                                           => 'url suffix deny',
    'Route Not Found'                                           => 'Route Not Found',
    'Undefined db type'                                         => 'variable type error db type',
    'variable type error'                                       => 'variable type error',
    'PSR-4 error'                                               => 'PSR-4 error',
    'not support total'                                         => 'not support total',
    'not support last'                                          => 'not support last',
    'error session handler'                                     => 'error session handler',
    'not allow php tag'                                         => 'not allow php tag',
    'not support'                                               => 'not support',
    'redisd master'                                             => 'redisd master error',
    'redisd slave'                                              => 'redisd slave error',
    'must run at sae'                                           => 'must run at sae',
    'memcache init error'                                       => 'memcache init error',
    'KVDB init error'                                           => 'KVDB init error',
    'fields not exists'                                         => 'fields not exists',
    'where express error'                                       => 'where express error',
    'no data to update'                                         => 'no data to update',
    'miss data to insert'                                       => 'miss data to insert',
    'miss complex primary data'                                 => 'miss complex primary data',
    'miss update condition'                                     => 'miss update condition',
    'model data Not Found'                                      => 'model data Not Found',
    'table data not Found'                                      => 'table data not Found',
    'delete without condition'                                  => 'delete without condition',
    'miss relation data'                                        => 'miss relation data',
    'tag attr must'                                             => 'tag attr must',
    'tag error'                                                 => 'tag error',
    'cache write error'                                         => 'cache write error',
    'sae mc write error'                                        => 'sae mc write error',
    'route name not exists'                                     => 'route name not exists',
    'invalid request'                                           => 'invalid request',
    'bind attr has exists'                                      => 'bind attr has exists',
    'relation data not exists'                                  => 'relation data not exists',
    'relation not support'                                      => 'relation not support',
    'chunk not support order'                                   => 'chunk not support order',
    'closure not support cache(true)'                           => 'closure not support cache(true)',

    // 上传错误信息
    'unknown upload error'                                      => 'unknown upload error',
    'file write error'                                          => 'file write error',
    'upload temp dir not found'                                 => 'upload temp dir not found',
    'no file to uploaded'                                       => 'no file to uploaded',
    'only the portion of file is uploaded'                      => 'only the portion of file is uploaded',
    'upload File size exceeds the maximum value'                => 'upload File size exceeds the maximum value',
    'upload write error'                                        => 'upload write error',
    'has the same filename: {:filename}'                        => 'has the same filename: {:filename}',
    'upload illegal files'                                      => 'upload illegal files',
    'illegal image files'                                       => 'illegal image files',
    'extensions to upload is not allowed'                       => 'extensions to upload is not allowed',
    'mimetype to upload is not allowed'                         => 'mimetype to upload is not allowed',
    'filesize not match'                                        => 'filesize not match',
    'directory {:path} creation failed'                         => 'directory {:path} creation failed',

    // Validate Error Message
    ':attribute require'                                        => ':attribute require',
    ':attribute must be numeric'                                => ':attribute must be numeric',
    ':attribute must be integer'                                => ':attribute must be integer',
    ':attribute must be float'                                  => ':attribute must be float',
    ':attribute must be bool'                                   => ':attribute must be bool',
    ':attribute not a valid email address'                      => ':attribute not a valid email address',
    ':attribute not a valid mobile'                             => ':attribute not a valid mobile',
    ':attribute must be a array'                                => ':attribute must be a array',
    ':attribute must be yes,on or 1'                            => ':attribute must be yes,on or 1',
    ':attribute not a valid datetime'                           => ':attribute not a valid datetime',
    ':attribute not a valid file'                               => ':attribute not a valid file',
    ':attribute not a valid image'                              => ':attribute not a valid image',
    ':attribute must be alpha'                                  => ':attribute must be alpha',
    ':attribute must be alpha-numeric'                          => ':attribute must be alpha-numeric',
    ':attribute must be alpha-numeric, dash, underscore'        => ':attribute must be alpha-numeric, dash, underscore',
    ':attribute not a valid domain or ip'                       => ':attribute not a valid domain or ip',
    ':attribute must be chinese'                                => ':attribute must be chinese',
    ':attribute must be chinese or alpha'                       => ':attribute must be chinese or alpha',
    ':attribute must be chinese,alpha-numeric'                  => ':attribute must be chinese,alpha-numeric',
    ':attribute must be chinese,alpha-numeric,underscore, dash' => ':attribute must be chinese,alpha-numeric,underscore, dash',
    ':attribute not a valid url'                                => ':attribute not a valid url',
    ':attribute not a valid ip'                                 => ':attribute not a valid ip',
    ':attribute must be dateFormat of :rule'                    => ':attribute must be dateFormat of :rule',
    ':attribute must be in :rule'                               => ':attribute must be in :rule ',
    ':attribute be notin :rule'                                 => ':attribute be notin :rule',
    ':attribute must between :1 - :2'                           => ':attribute must between :1 - :2',
    ':attribute not between :1 - :2'                            => ':attribute not between :1 - :2',
    'size of :attribute must be :rule'                          => 'size of :attribute must be :rule',
    'max size of :attribute must be :rule'                      => ':max size of :attribute must be :rule',
    'min size of :attribute must be :rule'                      => ':min size of :attribute must be :rule',
    ':attribute cannot be less than :rule'                      => ':attribute cannot be less than :rule',
    ':attribute cannot exceed :rule'                            => ':attribute cannot exceed :rule',
    ':attribute not within :rule'                               => 'attribute cannot exceed :rule',
    'access IP is not allowed'                                  => 'access IP is not allowed',
    'access IP denied'                                          => 'access IP denied',
    ':attribute out of accord with :2'                          => ':attribute out of accord with :2',
    ':attribute cannot be same with :2'                         => ':attribute cannot be same with :2',
    ':attribute must greater than or equal :rule'               => ':attribute must greater than or equal :rule',
    ':attribute must greater than :rule'                        => ':attribute must greater than :rule',
    ':attribute must less than or equal :rule'                  => ':attribute must less than or equal :rule',
    ':attribute must less than :rule'                           => ':attribute must less than :rule',
    ':attribute must equal :rule'                               => ':attribute must equal :rule',
    ':attribute has exists'                                     => ':attribute has exist',
    ':attribute not conform to the rules'                       => ':attribute not conform to the rules',
    'invalid Request method'                                    => 'invalid Request method',
    'invalid token'                                             => 'invalid token',
    'not conform to the rules'                                  => 'not conform to the rules',
];
