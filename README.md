# ratchet-basic
Basic ratchet application based on official tutorial on Ratchat.

1. install ZeroMQ
`http://zeromq.org/intro:get-the-software` and 
`http://zeromq.org/bindings:php`

2. run `composer update`

3. install `libevent-dev and php-devel`. Debian based example: `sudo apt install libevent-dev && sudo apt install php-devel`

4. `sudo pecl install ev && sudo pecl install event`

5. use http://supervisord.org/ for run the ws-server.php in production


For more details use the official tutorial on Ratchat http://socketo.me/docs/push
