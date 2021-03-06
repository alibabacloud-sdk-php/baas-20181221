<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class CreateFabricOrganizationRequest extends Model
{
    /**
     * @var string
     */
    public $organizationName;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $specName;

    /**
     * @var int
     */
    public $peersCount;

    /**
     * @var int
     */
    public $paymentDuration;

    /**
     * @var string
     */
    public $paymentDurationUnit;
    protected $_name = [
        'organizationName'    => 'OrganizationName',
        'location'            => 'Location',
        'domain'              => 'Domain',
        'description'         => 'Description',
        'specName'            => 'SpecName',
        'peersCount'          => 'PeersCount',
        'paymentDuration'     => 'PaymentDuration',
        'paymentDurationUnit' => 'PaymentDurationUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationName) {
            $res['OrganizationName'] = $this->organizationName;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }
        if (null !== $this->peersCount) {
            $res['PeersCount'] = $this->peersCount;
        }
        if (null !== $this->paymentDuration) {
            $res['PaymentDuration'] = $this->paymentDuration;
        }
        if (null !== $this->paymentDurationUnit) {
            $res['PaymentDurationUnit'] = $this->paymentDurationUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFabricOrganizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationName'])) {
            $model->organizationName = $map['OrganizationName'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }
        if (isset($map['PeersCount'])) {
            $model->peersCount = $map['PeersCount'];
        }
        if (isset($map['PaymentDuration'])) {
            $model->paymentDuration = $map['PaymentDuration'];
        }
        if (isset($map['PaymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['PaymentDurationUnit'];
        }

        return $model;
    }
}
