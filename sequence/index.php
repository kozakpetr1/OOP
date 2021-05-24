<?php

require "class/Sequence.php";
require "class/ASeq.php";
require "class/GSeq.php";
require "class/FSeq.php";
require "class/Visual.php";

ASeq::setVals(1,2);
Visual::showArray(ASeq::getSeqOfNums(20));
Visual::showValue(ASeq::getMember(10));

GSeq::setVals(1,2);
Visual::showArray(GSeq::getSeqOfNums(20));
Visual::showValue(GSeq::getMember(10));

Visual::showArray(FSeq::getSeqOfNums(10));
Visual::showValue(FSeq::getMember(10));