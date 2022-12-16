<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dynamic-spl-update-event.proto

namespace Cinexpert\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Cinexpert.Messages.DynamicSplUpdateEvent</code>
 */
class DynamicSplUpdateEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Cinexpert.Messages.DynamicSplUpdateEvent.EventType eventType = 1;</code>
     */
    private $eventType = 0;
    /**
     * Generated from protobuf field <code>string posScheduleId = 2;</code>
     */
    private $posScheduleId = '';
    /**
     * Generated from protobuf field <code>string posScheduleStartTime = 3;</code>
     */
    private $posScheduleStartTime = '';
    /**
     * Generated from protobuf field <code>string posMovieId = 4;</code>
     */
    private $posMovieId = '';
    /**
     * Generated from protobuf field <code>string posMovieTitle = 5;</code>
     */
    private $posMovieTitle = '';
    /**
     * Generated from protobuf field <code>string cplId = 6;</code>
     */
    private $cplId = '';
    /**
     * Generated from protobuf field <code>string cplTitle = 7;</code>
     */
    private $cplTitle = '';
    /**
     * Generated from protobuf field <code>string cplDuration = 8;</code>
     */
    private $cplDuration = '';
    /**
     * Generated from protobuf field <code>string cplEditRate = 9;</code>
     */
    private $cplEditRate = '';
    /**
     * Generated from protobuf field <code>string cplRuleId = 10;</code>
     */
    private $cplRuleId = '';
    /**
     * Generated from protobuf field <code>string cinemaId = 11;</code>
     */
    private $cinemaId = '';
    /**
     * Generated from protobuf field <code>string roomId = 12;</code>
     */
    private $roomId = '';
    /**
     * Generated from protobuf field <code>string splPackInstanceDraftId = 13;</code>
     */
    private $splPackInstanceDraftId = '';
    /**
     * Generated from protobuf field <code>string splId = 14;</code>
     */
    private $splId = '';
    /**
     * Generated from protobuf field <code>string audioFormat = 15;</code>
     */
    private $audioFormat = '';
    /**
     * Generated from protobuf field <code>string videoFormat = 16;</code>
     */
    private $videoFormat = '';
    /**
     * Generated from protobuf field <code>string videoDimension = 17;</code>
     */
    private $videoDimension = '';
    /**
     * Generated from protobuf field <code>string videoResolution = 18;</code>
     */
    private $videoResolution = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $eventType
     *     @type string $posScheduleId
     *     @type string $posScheduleStartTime
     *     @type string $posMovieId
     *     @type string $posMovieTitle
     *     @type string $cplId
     *     @type string $cplTitle
     *     @type string $cplDuration
     *     @type string $cplEditRate
     *     @type string $cplRuleId
     *     @type string $cinemaId
     *     @type string $roomId
     *     @type string $splPackInstanceDraftId
     *     @type string $splId
     *     @type string $audioFormat
     *     @type string $videoFormat
     *     @type string $videoDimension
     *     @type string $videoResolution
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\DynamicSplUpdateEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Cinexpert.Messages.DynamicSplUpdateEvent.EventType eventType = 1;</code>
     * @return int
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Generated from protobuf field <code>.Cinexpert.Messages.DynamicSplUpdateEvent.EventType eventType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEventType($var)
    {
        GPBUtil::checkEnum($var, \Cinexpert\Messages\DynamicSplUpdateEvent_EventType::class);
        $this->eventType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string posScheduleId = 2;</code>
     * @return string
     */
    public function getPosScheduleId()
    {
        return $this->posScheduleId;
    }

    /**
     * Generated from protobuf field <code>string posScheduleId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPosScheduleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->posScheduleId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string posScheduleStartTime = 3;</code>
     * @return string
     */
    public function getPosScheduleStartTime()
    {
        return $this->posScheduleStartTime;
    }

    /**
     * Generated from protobuf field <code>string posScheduleStartTime = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPosScheduleStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->posScheduleStartTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string posMovieId = 4;</code>
     * @return string
     */
    public function getPosMovieId()
    {
        return $this->posMovieId;
    }

    /**
     * Generated from protobuf field <code>string posMovieId = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPosMovieId($var)
    {
        GPBUtil::checkString($var, True);
        $this->posMovieId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string posMovieTitle = 5;</code>
     * @return string
     */
    public function getPosMovieTitle()
    {
        return $this->posMovieTitle;
    }

    /**
     * Generated from protobuf field <code>string posMovieTitle = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPosMovieTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->posMovieTitle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cplId = 6;</code>
     * @return string
     */
    public function getCplId()
    {
        return $this->cplId;
    }

    /**
     * Generated from protobuf field <code>string cplId = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCplId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cplId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cplTitle = 7;</code>
     * @return string
     */
    public function getCplTitle()
    {
        return $this->cplTitle;
    }

    /**
     * Generated from protobuf field <code>string cplTitle = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCplTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->cplTitle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cplDuration = 8;</code>
     * @return string
     */
    public function getCplDuration()
    {
        return $this->cplDuration;
    }

    /**
     * Generated from protobuf field <code>string cplDuration = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCplDuration($var)
    {
        GPBUtil::checkString($var, True);
        $this->cplDuration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cplEditRate = 9;</code>
     * @return string
     */
    public function getCplEditRate()
    {
        return $this->cplEditRate;
    }

    /**
     * Generated from protobuf field <code>string cplEditRate = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setCplEditRate($var)
    {
        GPBUtil::checkString($var, True);
        $this->cplEditRate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cplRuleId = 10;</code>
     * @return string
     */
    public function getCplRuleId()
    {
        return $this->cplRuleId;
    }

    /**
     * Generated from protobuf field <code>string cplRuleId = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCplRuleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cplRuleId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cinemaId = 11;</code>
     * @return string
     */
    public function getCinemaId()
    {
        return $this->cinemaId;
    }

    /**
     * Generated from protobuf field <code>string cinemaId = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setCinemaId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cinemaId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string roomId = 12;</code>
     * @return string
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * Generated from protobuf field <code>string roomId = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkString($var, True);
        $this->roomId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string splPackInstanceDraftId = 13;</code>
     * @return string
     */
    public function getSplPackInstanceDraftId()
    {
        return $this->splPackInstanceDraftId;
    }

    /**
     * Generated from protobuf field <code>string splPackInstanceDraftId = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setSplPackInstanceDraftId($var)
    {
        GPBUtil::checkString($var, True);
        $this->splPackInstanceDraftId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string splId = 14;</code>
     * @return string
     */
    public function getSplId()
    {
        return $this->splId;
    }

    /**
     * Generated from protobuf field <code>string splId = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setSplId($var)
    {
        GPBUtil::checkString($var, True);
        $this->splId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string audioFormat = 15;</code>
     * @return string
     */
    public function getAudioFormat()
    {
        return $this->audioFormat;
    }

    /**
     * Generated from protobuf field <code>string audioFormat = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setAudioFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->audioFormat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string videoFormat = 16;</code>
     * @return string
     */
    public function getVideoFormat()
    {
        return $this->videoFormat;
    }

    /**
     * Generated from protobuf field <code>string videoFormat = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setVideoFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->videoFormat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string videoDimension = 17;</code>
     * @return string
     */
    public function getVideoDimension()
    {
        return $this->videoDimension;
    }

    /**
     * Generated from protobuf field <code>string videoDimension = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setVideoDimension($var)
    {
        GPBUtil::checkString($var, True);
        $this->videoDimension = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string videoResolution = 18;</code>
     * @return string
     */
    public function getVideoResolution()
    {
        return $this->videoResolution;
    }

    /**
     * Generated from protobuf field <code>string videoResolution = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setVideoResolution($var)
    {
        GPBUtil::checkString($var, True);
        $this->videoResolution = $var;

        return $this;
    }

}

