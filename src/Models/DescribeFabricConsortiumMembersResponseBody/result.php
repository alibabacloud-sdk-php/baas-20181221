<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumMembersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example consortium-lianmenyumingyi-hc5d1bwlulg7
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @example domain
     *
     * @var string
     */
    public $domain;

    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $joinedTime;

    /**
     * @example peers-aaaaaa2-1eqnj5o5w9dt3
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example name
     *
     * @var string
     */
    public $organizationName;
    protected $_name = [
        'consortiumId'     => 'ConsortiumId',
        'description'      => 'Description',
        'domain'           => 'Domain',
        'joinedTime'       => 'JoinedTime',
        'organizationId'   => 'OrganizationId',
        'organizationName' => 'OrganizationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->joinedTime) {
            $res['JoinedTime'] = $this->joinedTime;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->organizationName) {
            $res['OrganizationName'] = $this->organizationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['JoinedTime'])) {
            $model->joinedTime = $map['JoinedTime'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['OrganizationName'])) {
            $model->organizationName = $map['OrganizationName'];
        }

        return $model;
    }
}
