<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricConsortiumResponseBody;

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
    public $clusterState;

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
    public $description;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $memberCount;

    /**
     * @var int
     */
    public $ordererCount;

    /**
     * @var string
     */
    public $ordererType;

    /**
     * @var string
     */
    public $ownerBid;

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
    public $serviceState;

    /**
     * @var string
     */
    public $specName;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'channelCount'   => 'ChannelCount',
        'channelPolicy'  => 'ChannelPolicy',
        'clusterState'   => 'ClusterState',
        'codeName'       => 'CodeName',
        'consortiumId'   => 'ConsortiumId',
        'consortiumName' => 'ConsortiumName',
        'createTime'     => 'CreateTime',
        'description'    => 'Description',
        'domain'         => 'Domain',
        'memberCount'    => 'MemberCount',
        'ordererCount'   => 'OrdererCount',
        'ordererType'    => 'OrdererType',
        'ownerBid'       => 'OwnerBid',
        'ownerUid'       => 'OwnerUid',
        'regionId'       => 'RegionId',
        'serviceState'   => 'ServiceState',
        'specName'       => 'SpecName',
        'zoneId'         => 'ZoneId',
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
        if (null !== $this->clusterState) {
            $res['ClusterState'] = $this->clusterState;
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->memberCount) {
            $res['MemberCount'] = $this->memberCount;
        }
        if (null !== $this->ordererCount) {
            $res['OrdererCount'] = $this->ordererCount;
        }
        if (null !== $this->ordererType) {
            $res['OrdererType'] = $this->ordererType;
        }
        if (null !== $this->ownerBid) {
            $res['OwnerBid'] = $this->ownerBid;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceState) {
            $res['ServiceState'] = $this->serviceState;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['ClusterState'])) {
            $model->clusterState = $map['ClusterState'];
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['MemberCount'])) {
            $model->memberCount = $map['MemberCount'];
        }
        if (isset($map['OrdererCount'])) {
            $model->ordererCount = $map['OrdererCount'];
        }
        if (isset($map['OrdererType'])) {
            $model->ordererType = $map['OrdererType'];
        }
        if (isset($map['OwnerBid'])) {
            $model->ownerBid = $map['OwnerBid'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceState'])) {
            $model->serviceState = $map['ServiceState'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
