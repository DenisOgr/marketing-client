<?php
/**
 * Created by Marketing Pdffiller.
 * User: Denis Porplenko <denis.porplenko@pdffiller.com>
 * Date: 1/11/15
 * Time: 1:05 PM
 */

include 'sources/yii2pest/Yii2Pest.php';

class MarketingClient  extends Yii2Pest{

    const API_URL = 'http://api.marketing.loc';

    protected $user;

    function __construct(MarketingUser $user)
    {
        $this->user = $user;
        parent::__construct(self::API_URL);

        $this->setupAuth($this->user->getLogin(), 'foobar');
    }


} 