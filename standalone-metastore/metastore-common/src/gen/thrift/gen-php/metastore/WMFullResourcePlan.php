<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class WMFullResourcePlan
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'plan',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\metastore\WMResourcePlan',
        ),
        2 => array(
            'var' => 'pools',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\WMPool',
                ),
        ),
        3 => array(
            'var' => 'mappings',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\WMMapping',
                ),
        ),
        4 => array(
            'var' => 'triggers',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\WMTrigger',
                ),
        ),
        5 => array(
            'var' => 'poolTriggers',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\WMPoolTrigger',
                ),
        ),
    );

    /**
     * @var \metastore\WMResourcePlan
     */
    public $plan = null;
    /**
     * @var \metastore\WMPool[]
     */
    public $pools = null;
    /**
     * @var \metastore\WMMapping[]
     */
    public $mappings = null;
    /**
     * @var \metastore\WMTrigger[]
     */
    public $triggers = null;
    /**
     * @var \metastore\WMPoolTrigger[]
     */
    public $poolTriggers = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['plan'])) {
                $this->plan = $vals['plan'];
            }
            if (isset($vals['pools'])) {
                $this->pools = $vals['pools'];
            }
            if (isset($vals['mappings'])) {
                $this->mappings = $vals['mappings'];
            }
            if (isset($vals['triggers'])) {
                $this->triggers = $vals['triggers'];
            }
            if (isset($vals['poolTriggers'])) {
                $this->poolTriggers = $vals['poolTriggers'];
            }
        }
    }

    public function getName()
    {
        return 'WMFullResourcePlan';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->plan = new \metastore\WMResourcePlan();
                        $xfer += $this->plan->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->pools = array();
                        $_size931 = 0;
                        $_etype934 = 0;
                        $xfer += $input->readListBegin($_etype934, $_size931);
                        for ($_i935 = 0; $_i935 < $_size931; ++$_i935) {
                            $elem936 = null;
                            $elem936 = new \metastore\WMPool();
                            $xfer += $elem936->read($input);
                            $this->pools []= $elem936;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::LST) {
                        $this->mappings = array();
                        $_size937 = 0;
                        $_etype940 = 0;
                        $xfer += $input->readListBegin($_etype940, $_size937);
                        for ($_i941 = 0; $_i941 < $_size937; ++$_i941) {
                            $elem942 = null;
                            $elem942 = new \metastore\WMMapping();
                            $xfer += $elem942->read($input);
                            $this->mappings []= $elem942;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::LST) {
                        $this->triggers = array();
                        $_size943 = 0;
                        $_etype946 = 0;
                        $xfer += $input->readListBegin($_etype946, $_size943);
                        for ($_i947 = 0; $_i947 < $_size943; ++$_i947) {
                            $elem948 = null;
                            $elem948 = new \metastore\WMTrigger();
                            $xfer += $elem948->read($input);
                            $this->triggers []= $elem948;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::LST) {
                        $this->poolTriggers = array();
                        $_size949 = 0;
                        $_etype952 = 0;
                        $xfer += $input->readListBegin($_etype952, $_size949);
                        for ($_i953 = 0; $_i953 < $_size949; ++$_i953) {
                            $elem954 = null;
                            $elem954 = new \metastore\WMPoolTrigger();
                            $xfer += $elem954->read($input);
                            $this->poolTriggers []= $elem954;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('WMFullResourcePlan');
        if ($this->plan !== null) {
            if (!is_object($this->plan)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('plan', TType::STRUCT, 1);
            $xfer += $this->plan->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->pools !== null) {
            if (!is_array($this->pools)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('pools', TType::LST, 2);
            $output->writeListBegin(TType::STRUCT, count($this->pools));
            foreach ($this->pools as $iter955) {
                $xfer += $iter955->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->mappings !== null) {
            if (!is_array($this->mappings)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('mappings', TType::LST, 3);
            $output->writeListBegin(TType::STRUCT, count($this->mappings));
            foreach ($this->mappings as $iter956) {
                $xfer += $iter956->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->triggers !== null) {
            if (!is_array($this->triggers)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('triggers', TType::LST, 4);
            $output->writeListBegin(TType::STRUCT, count($this->triggers));
            foreach ($this->triggers as $iter957) {
                $xfer += $iter957->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->poolTriggers !== null) {
            if (!is_array($this->poolTriggers)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('poolTriggers', TType::LST, 5);
            $output->writeListBegin(TType::STRUCT, count($this->poolTriggers));
            foreach ($this->poolTriggers as $iter958) {
                $xfer += $iter958->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}