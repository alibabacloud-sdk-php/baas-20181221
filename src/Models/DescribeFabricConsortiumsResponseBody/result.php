<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumsResponseBody;

use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumsResponseBody\result\tags;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $channelCount;

    /**
     * @var string
     */
    public $channelPolicy;

    /**
     * @var string
     */
    public $codeName;

    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $consortiumName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var int
     */
    public $organizationCount;

    /**
     * @var string
     */
    public $ownerBid;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var int
     */
    public $ownerUid;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $specName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var bool
     */
    public $supportChannelConfig;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'channelCount'         => 'ChannelCount',
        'channelPolicy'        => 'ChannelPolicy',
        'codeName'             => 'CodeName',
        'consortiumId'         => 'ConsortiumId',
        'consortiumName'       => 'ConsortiumName',
        'createTime'           => 'CreateTime',
        'domain'               => 'Domain',
        'expiredTime'          => 'ExpiredTime',
        'organizationCount'    => 'OrganizationCount',
        'ownerBid'             => 'OwnerBid',
        'ownerName'            => 'OwnerName',
        'ownerUid'             => 'OwnerUid',
        'regionId'             => 'RegionId',
        'requestId'            => 'RequestId',
        'specName'             => 'SpecName',
        'state'                => 'State',
        'supportChannelConfig' => 'SupportChannelConfig',
        'tags'                 => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelCount) {
            $res['ChannelCount'] = $this->channelCount;
        }
        if (null !== $this->channelPolicy) {
            $res['ChannelPolicy'] = $this->channelPolicy;
        }
        if (null !== $this->codeName) {
            $res['CodeName'] = $this->codeName;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->consortiumName) {
            $res['ConsortiumName'] = $this->consortiumName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->organizationCount) {
            $res['OrganizationCount'] = $this->organizationCount;
        }
        if (null !== $this->ownerBid) {
            $res['OwnerBid'] = $this->ownerBid;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->supportChannelConfig) {
            $res['SupportChannelConfig'] = $this->supportChannelConfig;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ChannelCount'])) {
            $model->channelCount = $map['ChannelCount'];
        }
        if (isset($map['ChannelPolicy'])) {
            $model->channelPolicy = $map['ChannelPolicy'];
        }
        if (isset($map['CodeName'])) {
            $model->codeName = $map['CodeName'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['OrganizationCount'])) {
            $model->organizationCount = $map['OrganizationCount'];
        }
        if (isset($map['OwnerBid'])) {
            $model->ownerBid = $map['OwnerBid'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SupportChannelConfig'])) {
            $model->supportChannelConfig = $map['SupportChannelConfig'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
