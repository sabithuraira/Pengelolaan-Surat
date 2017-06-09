<?php
class HelpAr extends CActiveRecord
{
    public function beforeValidate()
    {   
        if($this->isNewRecord)
        {    
            $this->created_time=date('Y-m-d h:i:s');
            $this->created_by=Yii::app()->user->id;
        }

        $this->updated_by=Yii::app()->user->id;
        $this->updated_time=date('Y-m-d h:i:s');

        return parent::beforeValidate();
    }
}
?>