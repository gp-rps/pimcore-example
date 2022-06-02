<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Document\Newsletter;

class SendingParamContainer
{
    /**
     * @internal
     *
     * @var string
     */
    protected $email;

    /**
     * @internal
     *
     * @var array|null
     */
    protected $params;

    /**
     * SendingParamContainer constructor.
     *
     * @param string $email
     * @param array|null $params
     */
    public function __construct($email, array $params = null)
    {
        $this->email = $email;
        $this->params = $params;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return array|null
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param array|null $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }
}