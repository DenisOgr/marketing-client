<?php
/**
 * Created by Marketing Pdffiller.
 * User: Denis Porplenko <denis.porplenko@pdffiller.com>
 * Date: 1/11/15
 * Time: 1:08 PM
 */

class MarketingUser {

    protected $login;

    protected $password;

    protected $token;

    function __construct($login, $password, $token)
    {
        $this->login    = $login;
        $this->password = $password;
        $this->token    = $token;

        //$this->checkAccess();
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }


}