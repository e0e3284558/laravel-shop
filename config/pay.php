<?php

return [
    'alipay' => [
        'app_id' => '2016092400589000',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAltgrCZ4a5iHvHGmYineXJ7Z5WEHZhGNNBJIK1iByC0aZtQRSWx476RG0gv+F93bYUsCo1OdW68RRJq+wBVsnTY6aEwHlIne4dKvkRPjersR1FIKer+sB2NJ1Q1LLpWWLtC6deaR4S2pXJz06K8Et+4DMyVX4SdRHxw6nMrMyzVSBTTmVGSfuf9B7/iEld1uu0RLZjUY/a1XmsDwcAT0AgURbysXUvJtZeJnPM8IStgBAKvyJALKA8u9GmgOQgT2sknlBYuq2/HkETKm0WdduzX6YgSQ6tGok/qxmG1FXqMBRtXkRLSrLgLYUHLm9mfRy3X4lHInTjiZLd7N4dEHcYQIDAQAB',
        'private_key' => 'MIIEogIBAAKCAQEAv5nE7iUvh7A1RT+LyhMjcp3V6WCLQyMXg/iLSNP60lZx4kxaoLVTz/7l8FsadV8AV/RqV1yyTB50ksoxoR1MfHU8kM/uak8KhPlCp+vhAnHgRpdL+RbIYadKqQoC3UGkYfd6rCqpCaqkjVR85hKo+5HE9mMgO/rvOok9F98l8VB257u/Oiv09QpQdEQTsmSgLy5i2IkPPNXCF2uHfEHS4H0iFCDFAtMbSsJJbXxm7I5W0W6VQRiu/bWcqo4xo7QtekFeWERgYqziy6Zo1FusW5PSmlV0zNKA2LXfWRd4xi3dVrUXh9g/Yj9Mj5bWtGj43SlnY0ZBU7L8dJEDvXdfBwIDAQABAoIBAA8PJ/JLy+uPRvCVaQhN7shQbYK1StzRAkUmINRtjNZBYxwVQj5FYjwD3dDBaFf3SpCfLkiFiaH/9suexr3SDrPthwAex69lXP9MlBecq4fEqYsC0z7VspQyUOTuW4FGaoQkrmifxb9zwRE2pcZziwKS13dCHUN5mpnwNXQN3u6TcISI1dsOwemvDt+ivZhts5LCTi9u5giLYxxUU5OTpG9/+QslTjOwssMuWoeySslZeLzlwhlbt68tlbUolw4JruPofu/DAvaHtPPUiRnMozias+DGK2tWHfVStDJy7kFrksV7nqAbTDmWyfoH5ZfmxnU/GNXVKBDkwr2PkOHp2+kCgYEA8Q6lPs8N/WC21NhQ2dFe28Wj16nKAEZlOQQD+DDwJxzEuzuC6rALvk2edzwvfLCXkgzA7fTfwkRwOjHDsbWIb33TivhfnFyXMbc0h7fmoMXpWAXHSSKiwhek59zRpb0prleDcWQh+fL5S8NSRHo9pi3RZGXQFMWS2IyuTbxeAyMCgYEAy3pLT/eV/etAUizkTgxlI8MOJk5zPoCuekeRHORILYWTf32zG1R5Nrn9negaP2L3A0V5RVXGEWgmFHT/xDxC2xSQRl2PcjEwtDvhtKndNqlmd2zxXD7PUHM0YFfJiqfprze7aNMN384/ais/xOFwI2uG0vv4luii3faUz3nhdM0CgYAlCwIbt8fHkxAlfyRVhJYWIbX+0ymmhyrQ6ywM/MA60nHs78U7eVgko1rhqc8GU0DHgcw4BPRJryir2K/g5CuWLnjOl0JiDdxyGFwrKvh25lLoYuLv+zGVr/p4YveYh4wbLXmWeDO8bDkhCl/fBAXrPok562dheccKHfw/F94+jwKBgCXCoitK5PjkKWGWlx+syTAjyIJvWI+mzbo/gbx82LAp879bElvmB0CSr3AYXJaaxQBEakblrgYY78goFjbSgA2r+UI1pqMoYcNwwWgHhdfZA/zxqLDXrx1c48FlSS+EDafIjezcDd0Up0wKjqD4vRi1oaWRwQYwUdkjI2aFVcOZAoGAK4fk+9iJtYZQ+c8elvKkwlxNb/krhaNF6r4rSDnDUBuZPMTk0utnK0Riyj3stGPB8Kq6CNirphczGxn/vFUGTXhZe++M8J9WIdH9QouVtxLreQ2I9lx6qZRhuOyiWU3C6Bh6EgsUWpyljeNQ6Rj2hubxNHik6wsFIIFe+1IkNFU=',
        'log' => [
            'file' => storage_path('logs/alipay.log'),
        ]
    ],
    'wechat' => [
        'app_id' => '',
        'mch_id' => '',
        'key' => '',
        'cert_client' => '',
        'cert_key' => '',
        'log' => [
            'file' => storage_path('logs/wechat.log')
        ]
    ],
];


