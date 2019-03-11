<?php

return [
    'alipay' => [
        'app_id'         => '2016092500595986',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA7EkRVLrse3OFRQ5f9g111ONPUTbRtvAllEJOk9uGE4og311f/t5atbFy6B/+/lvj3WUd9W6tjuvVPI5/klZHPxZgpelLUW6Y7Z5TSGmMzZRuCxsLcsF2q+6z8q7xGL+Jn9rQso2K6lRHZVmc3IZ8zvl0rzXB6Gz+Dc+F/WQgw0zBWvJ/Y48oVkPcOMB3GRKEbJV1eW4l86v4gxntR46lRSY6y9vp9Dasqy2IBGYp6R8v5PPOnfOHaZmz3fzafPo25Nc8unvmF7r9ZHGRs9RILYQ03bi3NZlpIQF6aFLUd+qv4ceK5Z0HcgRNJlX0VnQ1WQc/1Jmsui4gBpdo7jbevQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAqju+/h1YT29Cpaf25hts+g1R1gr3FlzEtDTnKnY6aQyC3UdSm+Sqq2sWDzPRyzPsTnk6JyIoKrAgBk17rVlY5ilaVfO2M0vmmxJs+qCUrpAvjOSfER7Yjg+2VdqtVFSGwY1V+oK4XtVsZuQNT50Ogasq1sMN6XwHwwvumFKpJFugNr4juOSRJlAysKxnVUtdMGPcgi//zlmV3warLdZWPDTpBMDlOmwznhFAl2k2sInGogdDYzh5jqaBsdRqW88a8ByskYXRacli03Owl/0LUtPC5LQaUL+xc+LjTs+HSBmPA1wYPc793YzMNj4ljI5qavZ98YdCKGPtGbbRUuEfFQIDAQABAoIBABHBB2tTPimSrf2+5cYb6CKwDu/m1twzMqSku9M232KjVmajkJ8HmzEjivps6h1qPeP1SrZYHp5NHhnqLNLodZgTigNa1o7FBLj5k/oTk04dZYgpM9nCQM2YH+kWVGtuIVvAVM46oeXqFlMox6ac961YX7BkSWgnclvKO8kRHejXpe84FcJ8ujd07Cg/LgLRhLKx2OnKzBreuCroqj9rQyY+Z6QgaUXTOlZPGQPY9ig1tTV7aUr1UgWwJtNsUw2KCQQSl11ltypRmWqfhKXZxKPpDO80IgSyHgwMjH9ZeN1nX0fxB7eo44YDff0yEEFANSGSnxsgVQnbI2nGLjYq6CUCgYEA1rJKt458b+0d5fvEqqLRNcTGK0ZHr5y3jhQF4uiiFZ0KGmpg686TsH7oDxXhaWzhkGkyUvsIEvKcg04b419VihSbq93xUFgLV3gtmSg19m1E4RKQFz8I57p0dQeGtyx03YMcwOkhAVOghak+6WJAH9FKHgA7EiYeSH0awcKEZLMCgYEAyvuqx96n7O4rnBp39sBaVgFppUMcCp3FH6pPzhKVkybrEG2AscMrnf5o2oBx9z5+Un4shAAePHkgCPeycR43xnzovBXumR0ZjhnhjdpujwwSnVhMpD3K6RrT37s04RRUs+x6iBudMznFLFgvPAqG+54Qk7a9ewXS1eelUAJ7IRcCgYAo8xC1OgQaBQvy1baJJUzqCIITtu/tWuLXwpHs2ZowrSdEKo4Z6+jXfR0d43p+9TmApc/na+H6WzPnB3riP0i9cXjPqyFfxatEH7Pyxmykd+rvUu8QwAEe0b1spObZAS25IkzVrqGQ8zZmyAUr1oWMjAqq9jhOGd8kzFfSJRvDaQKBgAdjCz8E0lWkAUBIEk+PhnoUyRRzkcStIyxY1Vipgnn9c5aAdauCb8brKEOzYvJdetljsBkJrBAFVG4fHYZSVDNL/mhB4BIAZhquxG+WIGniRZcmTHu5p/W9vTIqLO14APEfTQJBBwKDOrK3btifhXQIt4+4mcKtXpPcPz7fKD33AoGBALfY8gfVClLbZ6wKwQyFJOuOpymdSP7oO65OUQoE3HujzQtly6CNDeeTAVMpHLYk+sit6uK0y05/U9wt29I2P2UUUoHITslKBc/s7FskKmODlNU4bzgZ0uwHaf/v+25XQY9kiZ7V2rii5Noxb/aWHxrUhJsv3DLDuUfzBkwX9/6b',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
