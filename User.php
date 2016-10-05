<?php

namespace BizlyLabs/Wex;

class User
{

    /**
     * @var string $OrgGroupLoginId
     * @access public
     */
    public $OrgGroupLoginId = null;

    /**
     * @var string $Username
     * @access public
     */
    public $Username = null;

    /**
     * @var string $Password
     * @access public
     */
    public $Password = null;

    /**
     * @param string $OrgGroupLoginId
     * @param string $Username
     * @param string $Password
     * @access public
     */
    public function __construct($OrgGroupLoginId, $Username, $Password)
    {
      $this->OrgGroupLoginId = $OrgGroupLoginId;
      $this->Username = $Username;
      $this->Password = $Password;
    }

}
