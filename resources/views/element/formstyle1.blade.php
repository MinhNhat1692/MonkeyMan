<section class="section-3">
	<div class="container" style="padding-top: 50px;padding-bottom: 50px">
		<div class="row text-center">
			<h2 class="text-center" style="display: block;width: 100%; padding: 30px 20px 70px 20px;font-weight: 900;font-size: 2.4em"><?=$section["title"]?></h2>
            <div class="col-5">
                <img class="section-banner" src="<?=$section["img"]?>" alt="banner">
            </div>
            <div class="col-7 text-left">
                <form>
                    <div class="form-group text-left">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group text-left">
                        <label for="exampleFormControlTextarea1">Thông tin yêu cầu</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi thông tin</button>
                </form>
            </div>
        </div>
	</div>
</section>
