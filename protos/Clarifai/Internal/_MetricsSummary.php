<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/model_version.proto

namespace Clarifai\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.MetricsSummary</code>
 */
class _MetricsSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float top1_accuracy = 1 [deprecated = true];</code>
     */
    private $top1_accuracy = 0.0;
    /**
     * Generated from protobuf field <code>float top5_accuracy = 2 [deprecated = true];</code>
     */
    private $top5_accuracy = 0.0;
    /**
     * Generated from protobuf field <code>float macro_avg_roc_auc = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $macro_avg_roc_auc = 0.0;
    /**
     * Generated from protobuf field <code>float macro_std_roc_auc = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $macro_std_roc_auc = 0.0;
    /**
     * Generated from protobuf field <code>float macro_avg_f1_score = 5 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $macro_avg_f1_score = 0.0;
    /**
     * Generated from protobuf field <code>float macro_std_f1_score = 6 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $macro_std_f1_score = 0.0;
    /**
     * Generated from protobuf field <code>float macro_avg_precision = 7 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $macro_avg_precision = 0.0;
    /**
     * Generated from protobuf field <code>float macro_avg_recall = 8 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $macro_avg_recall = 0.0;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\ModelVersion::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>float top1_accuracy = 1 [deprecated = true];</code>
     * @return float
     */
    public function getTop1Accuracy()
    {
        return $this->top1_accuracy;
    }

    /**
     * Generated from protobuf field <code>float top1_accuracy = 1 [deprecated = true];</code>
     * @param float $var
     * @return $this
     */
    public function setTop1Accuracy($var)
    {
        GPBUtil::checkFloat($var);
        $this->top1_accuracy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float top5_accuracy = 2 [deprecated = true];</code>
     * @return float
     */
    public function getTop5Accuracy()
    {
        return $this->top5_accuracy;
    }

    /**
     * Generated from protobuf field <code>float top5_accuracy = 2 [deprecated = true];</code>
     * @param float $var
     * @return $this
     */
    public function setTop5Accuracy($var)
    {
        GPBUtil::checkFloat($var);
        $this->top5_accuracy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_roc_auc = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getMacroAvgRocAuc()
    {
        return $this->macro_avg_roc_auc;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_roc_auc = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setMacroAvgRocAuc($var)
    {
        GPBUtil::checkFloat($var);
        $this->macro_avg_roc_auc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float macro_std_roc_auc = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getMacroStdRocAuc()
    {
        return $this->macro_std_roc_auc;
    }

    /**
     * Generated from protobuf field <code>float macro_std_roc_auc = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setMacroStdRocAuc($var)
    {
        GPBUtil::checkFloat($var);
        $this->macro_std_roc_auc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_f1_score = 5 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getMacroAvgF1Score()
    {
        return $this->macro_avg_f1_score;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_f1_score = 5 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setMacroAvgF1Score($var)
    {
        GPBUtil::checkFloat($var);
        $this->macro_avg_f1_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float macro_std_f1_score = 6 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getMacroStdF1Score()
    {
        return $this->macro_std_f1_score;
    }

    /**
     * Generated from protobuf field <code>float macro_std_f1_score = 6 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setMacroStdF1Score($var)
    {
        GPBUtil::checkFloat($var);
        $this->macro_std_f1_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_precision = 7 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getMacroAvgPrecision()
    {
        return $this->macro_avg_precision;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_precision = 7 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setMacroAvgPrecision($var)
    {
        GPBUtil::checkFloat($var);
        $this->macro_avg_precision = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_recall = 8 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getMacroAvgRecall()
    {
        return $this->macro_avg_recall;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_recall = 8 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setMacroAvgRecall($var)
    {
        GPBUtil::checkFloat($var);
        $this->macro_avg_recall = $var;

        return $this;
    }

}
