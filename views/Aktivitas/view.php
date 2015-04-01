<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aktivitas */

$this->title = $model->judul;
?>
<div class="aktivitas-view">
	<!--Mapping Site-->
		
	<!--Detail Header-->
    <h1 style='margin-top:0px; padding-top:15px;'>View Activity : <?= Html::encode($this->title) ?></h1>
    <hr>
    
    <!--Detail Body-->
	<table style='font-size:18px;'>
		<tr height='40'>
			<td><label>Date</label></td>
			<td>: <?php echo $model->tanggal;?></td>
		</tr>
		<tr height='40'>
			<td width="190"><label>Activity</label></td>
			<td>: <?php echo $model->judul;?></td>
		</tr>
		<tr height='40'>
			<td width="100"><label>Creator</label></td>
			<td>: <?= $model->findCreator($model->creator) ?></td>
		</tr>	
		<tr height='40'>
			<td><label>Location</label></td>
			<td>: <?php echo $model->findLocation($model->siteId);?></td>
		</tr>	
		<tr height='40'>
			<td><label>Status</label></td>
			<td>: <?php echo $model->status;?></td>
		</tr>
		<tr height='40'>
			<td><label>Photo</label></td>
			<td>: <?php echo $model->foto;?></td>
		</tr>
		<tr height='40'>
			<td><label>Approval Supervisor</label></td>
			<td>: <?php echo $model->status_approval_supervi?></td>
		</tr>
		<tr height='40'>
			<td><label>Approval PM</label></td>
			<td>: <?php echo $model->status_approval_pm;?></td>
		</tr>
		<tr height='40'>
			<td><label>Notes</label></td>
			<td>:</td>
		</tr>		
	</table>
		<div id='keterangan' style='border:3px solid; border-radius:5px; padding:10px; margin-bottom:10px'>
			<?php echo $model->keterangan?>
		</div>
		 <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		 <?= Html::a('Back', ['index'], ['class' => 'btn btn-success']) ?>
    

    

</div>
<!--
			'id',
            'tanggal',
            'judul',
            'status',
            'foto',
            'keterangan:ntext',
            'status_approval_pm',
            'status_approval_supervi',
            'creator',
            'siteId',-->