
	<div class="content">
		<div class="tipsbox">
		    <div class="tips boxsizing radius3">
		        <div class="tips-titbox">
		            <h1 class="tip-tit"><i class="tips-icon-lamp"></i>{$Think.lang.operation_tips}</h1>
		            <span class="open-span span-icon"><i class="open-icon"></i></span>
		        </div>
		    </div>
			<ol class="tips-list" id="tips-list">
				<li>1.商品订单退款申请及审核处理。</li>
			</ol>
		</div>
		<div class="iframeCon">
		<div class="iframeMain">
			<div class="white-shadow2">
				<div class="details-box">
					<h1 class="details-tit">退款处理</h1>
					<div class="jurisdiction boxsizing">
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">支付单号：</dt>
							<dd class="left text-l">
								{$list.order_sn}
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款单号：</dt>
							<dd class="left text-l">
								{$list.refund_sn}
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">申请时间：</dt>
							<dd class="left text-l">
								{:date('Y-m-d H:i:s',$list['dateline'])}
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款原因：</dt>
							<dd class="left text-l">
								{$list.causes_name}
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款金额：</dt>
							<dd class="left text-l">
								{$list.refund_amount}
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款说明：</dt>
							<dd class="left text-l">
								{$list.causes}
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款凭证：</dt>
							<dd class="left text-l">
								<div class="evalute-tableImg">
									<foreach name="list.refund_images" item="v" key="k">
										<i class="evalute-icon view_img" id="refund-img{$k}" url="{$v}"></i>
									</foreach>
								</div>
							</dd>
						</dl>
					</div>
					<h1 class="details-tit">商城处理</h1>
					<form method="post" name="settingForm" action="{:U('Presales/editrefund')}" enctype="multipart/form-data" id="refund_form">
				     	<input type="hidden" name="form_submit" value="submit"/>
				     	<input type="hidden" name="refund_id" value="{$list.refund_id}"/>
				     	<input type="hidden" name="order_id" value="{$list.order_id}"/>
				     	<input type="hidden" name="order_sn" value="{$list.order_sn}"/>
				     	<input type="hidden" name="refund_sn" value="{$list.refund_sn}"/>
				     	<input type="hidden" name="user_id" value="{$Think.session.admin_user.uid}"/>
				     	<input type="hidden" name="user_name" value="{$Think.session.admin_user.username}"/>
						<div class="jurisdiction boxsizing marginT0">
							<dl class="juris-dl boxsizing remarks-dl">
								<dt class="left text-r boxsizing"><span class="redstar">*</span>处理意见：</dt>
								<dd class="left text-l">
									<div class="button-holder" localrequired="">
										<div class="radio i-checks">
											<p class="radiobox"><input type="radio" id="radio-1-a" name="status" value="2" class="regular-radio"/><label for="radio-1-a"></label><span class="radio-word">同意</span></p>
											<p class="radiobox"><input type="radio" id="radio-1-b" name="status" value="4" class="regular-radio"/><label for="radio-1-b"></label><span class="radio-word">拒绝</span></p>
										</div>
									</div>
									<!-- <p class="remind1">请确认是否要打款！</p> -->
								</dd>
							</dl>
							<dl class="juris-dl boxsizing remarks-dl">
								<dt class="left text-r boxsizing"><span class="redstar">*</span>处理说明：</dt>
								<dd class="left text-l">
									<textarea type="text" name="remark" class="com-textarea1 radius3 boxsizing" placeholder="" localrequired=""></textarea>
									<p class="remind1">同意或拒绝退款，请在上面输入处理说明</p>
								</dd>
							</dl>
						</div>
						<div class="btnbox3 boxsizing">
							<a type="button" id="message_sub" class="btn1 radius3 marginT10  btn3-btnmargin form_data">{$Think.lang.submit_btn}</a>
							<a type="button" class="btn1 radius3 marginT10" href="{:U('/Presales/refunds')}">返回列表</a>
						</div>

						</form>
				</div>
			</div>
		</div>
	</div>
	</div>
		<!--<script type="text/javascript" src="__PUBLIC__/admin/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/admin/js/common.js"></script>-->
		<script type="text/javascript">
			$(function(){
				$(document).posi({class:'view_img'});
			})
		</script>
