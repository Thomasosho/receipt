<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Free Invoice Generator</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">

        <!-- Bootstrap core CSS -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#7952b3">


        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .navbar {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            border: 0 !important;
        }

        #navbarsExample08 {
            display: inherit !important;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>

        <link rel="manifest" href="https://invoice-generator.com/manifest.json">
        <link rel="alternate" media="print" type="application/pdf" title="Click Download Invoice to print" href="https://invoice-generator.com/print.pdf">

        <link href="https://invoice.smartdevelop.uz/css/vendor.css" type="text/css" rel="stylesheet">
        <link href="https://invoice.smartdevelop.uz/css/app.css" type="text/css" rel="stylesheet">

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
        <script type="text/javascript" src="https://invoice.smartdevelop.uz/js/vendor.js"></script>
        <script type="text/javascript" src="https://invoice.smartdevelop.uz/js/app.js"></script>
        <script src="https://kit.fontawesome.com/9a2d6cc714.js" crossorigin="anonymous"></script>

        <!-- Custom styles for this template -->
        <link href="navbar.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .display {
                display: inherit !important;
            }

            .bg {
                background-color: #3d4c59 !important;
            }

            .btn-d {
                background-color: #000 !important;
                color: #fff !important;
                font-size: 12px !important;
                border-radius: 5px !important;
            }

            .btn-g {
                background-color: #009e74 !important;
                color: #fff !important;
                font-size: 12px !important;
                border-radius: 25px !important;
                width: 100px !important;
                text-align: center !important;
            }

            .white {
                color: #fff !important;
            }

            .small {
                font-size: 12px !important;
            }

            .logo {
                font-size: 16px !important;
            }

            .navbar-nav li a {
                padding-top: 5px !important;
                padding-bottom: 5px !important;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-dark bg" aria-label="Tenth navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-md-center display" id="navbarsExample08">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link logo active" aria-current="page" href="#">Invoice Generator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-d" href="#">Learn More</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link white small">Invoice Guide</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link btn-g">Upgrade</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="scrollable">
        <div class="container">

    <div class="">
    <div ng-view="" class="ng-scope"><form name="invoiceForm" class="ng-pristine ng-scope ng-invalid ng-invalid-required">
	<div class="invoice-holder clearfix">
		<div class="mobile-btns">
			<div class="inner">
				<div class="my-invoices-btn">
					<a href="/#/invoices" class="btn btn-link">
						My Invoices
						<span class="badge ng-binding" ng-show="numInvoices>0">2</span>
					</a>
				</div>
				<div class="right">
					<button type="button" class="btn btn-link" ng-disabled="invoiceForm.$invalid" ng-click="downloadModal()" disabled="disabled">
						<span class="fas fa-arrow-to-bottom"></span>
						Download
					</button>
					<button type="button" class="btn btn-primary" ng-disabled="invoiceForm.$invalid" ng-click="sendModal()" disabled="disabled">
						Send
					</button>
				</div>
			</div>
		</div>

		<div class="invoice-controls desktop">
			<div class="affix-el affix-top" id="invoice-controls-affix">
				<div class="btns clearfix">
					<div class="btn-holder">
						<button type="button" class="btn btn-primary btn-lg btn-block" ng-disabled="invoiceForm.$invalid" ng-click="sendModal()" tabindex="1050" disabled="disabled">
							Send Invoice
						</button>
					</div>
					<div class="btn-holder">
						<button type="button" class="btn btn-link btn-lg btn-block" ng-disabled="invoiceForm.$invalid" ng-click="downloadModal()" tabindex="1051" disabled="disabled">
							<span class="fas fa-arrow-to-bottom"></span> Download Invoice
						</button>
					</div>
				</div>

				<div class="section selected-currency">
					<a href="#" ng-click="selectCurrency();$event.preventDefault()" tabindex="1052">
						Currency:
						<strong class="ng-binding">USD</strong>
						<span class="edit-icon"><span class="fas fa-pencil"></span></span>
					</a>
				</div>

				<div class="section save-template">
					<a href="#" ng-click="saveDefaults();$event.preventDefault()" ng-show="!isDefault()" tabindex="1054" class="ng-hide">
						Save template
					</a>
					<div class="using-default" ng-show="isDefault()">
						Using Default Template
					</div>
				</div>

				<div class="section my-invoices-btn">
					<a href="#/invoices" tabindex="1054">
						My Invoices
						<span class="badge ng-binding" ng-show="numInvoices>0">2</span>
					</a>
				</div>
			</div>
		</div>

		<div class="papers">
			<div class="invoice">
				<div class="two-col clearfix">
					<div class="title">
						<input class="form-control input-label ng-pristine ng-untouched ng-valid" ng-model="invoice.header" tabindex="10" value="INVOICE">
						<div class="subtitle">
							<div class="input-group">
								<span class="input-group-addon">#</span>
								<input class="form-control ng-pristine ng-untouched ng-valid" tabindex="11" ng-model="invoice.number" value="3">
							</div>
						</div>
					</div>

					<div class="col contact-info">
						<div class="logo noselect">
						  	<div class="placeholder" ng-hide="invoice.logo">
						  		<div class="main"><span class="fas fa-plus"></span> Add Your Logo</div>
						  		<div class="secondary hidden">optional</div>
						  	</div>
							<img ng-show="invoice.logo" ng-src="" alt="Invoice Logo" class="ng-hide">
							<input type="file" accept="image/*" class="file-1" onchange="angular.element(this).scope().changeLogo(this)" tabindex="12">
							<input type="file" accept="image/*" class="file-2" onchange="angular.element(this).scope().changeLogo(this)">
							<input type="file" accept="image/*" class="file-3" onchange="angular.element(this).scope().changeLogo(this)">
							<input type="file" accept="image/*" class="file-4" onchange="angular.element(this).scope().changeLogo(this)">
							<input type="file" accept="image/*" class="file-5" onchange="angular.element(this).scope().changeLogo(this)">
							<input type="file" accept="image/*" class="file-6" onchange="angular.element(this).scope().changeLogo(this)">
							<input type="file" accept="image/*" class="file-7" onchange="angular.element(this).scope().changeLogo(this)">
							<input type="file" accept="image/*" class="file-8" onchange="angular.element(this).scope().changeLogo(this)">
							<button class="remove-logo ng-hide" ng-show="invoice.logo" ng-click="removeLogo()" tabindex="13">
								<span class="fas fa-times"></span>
							</button>
						</div>

						<div class="logo-not-supported alert alert-warning">
							<span class="fas fa-exclamation-triangle"></span>
							Uploading logos is not supported by your browser. Please consider <a href="https://firefox.com" target="_blank">upgrading</a>.
						</div>

						<div class="contact from">
							<div class="value">
								<div class="expandingText" style="position: relative;"><textarea class="form-control ng-pristine ng-untouched expanding-init ng-invalid ng-invalid-required" placeholder="Who is this invoice from? (required)" ng-model="invoice.from" tabindex="15" required="" expanding-textarea="" style="position: absolute; height: 100%; resize: none;"></textarea><pre class="textareaClone" style="visibility: hidden; border: 1px solid; white-space: pre-wrap; line-height: 20px; text-decoration: none solid rgb(49, 53, 56); font-size: 14px; font-family: NeueHaasUnica, Helvetica, Arial, sans-serif; text-align: start; word-break: normal; padding: 6px 12px; margin-bottom: 0px; position: relative;"><div> </div><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre></div>
							</div>
						</div>

						<div class="row bill-to-details">
							<div class="col-sm-6">
								<div class="contact to">
									<div class="field">
										<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.to_title" tabindex="16">
									</div>
									<div class="value">
										<div class="expandingText" style="position: relative;"><textarea class="form-control ng-pristine ng-untouched expanding-init ng-invalid ng-invalid-required" placeholder="Who is this invoice to? (required)" ng-model="invoice.to" tabindex="17" required="" expanding-textarea="" style="position: absolute; height: 100%; resize: none;"></textarea><pre class="textareaClone" style="visibility: hidden; border: 1px solid; white-space: pre-wrap; line-height: 20px; text-decoration: none solid rgb(49, 53, 56); font-size: 14px; font-family: NeueHaasUnica, Helvetica, Arial, sans-serif; text-align: start; word-break: normal; padding: 6px 12px; margin-bottom: 0px; position: relative;"><div> </div><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre></div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="contact to">
									<div class="field">
										<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.ship_to_title" tabindex="18">
									</div>
									<div class="value">
										<div class="expandingText" style="position: relative;"><textarea class="form-control ng-pristine ng-untouched ng-valid expanding-init" placeholder="(optional)" ng-model="invoice.ship_to" tabindex="19" expanding-textarea="" style="position: absolute; height: 100%; resize: none;"></textarea><pre class="textareaClone" style="visibility: hidden; border: 1px solid; white-space: pre-wrap; line-height: 20px; text-decoration: none solid rgb(49, 53, 56); font-size: 14px; font-family: NeueHaasUnica, Helvetica, Arial, sans-serif; text-align: start; word-break: normal; padding: 6px 12px; margin-bottom: 0px; position: relative;"><div> </div><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col invoice-details">
						<div class="input-group addon-input">
							<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.date_title" tabindex="20" value="Date">
							<div class="input-group-addon">
								<input class="form-control datepicker date ng-pristine ng-untouched ng-valid hasDatepicker" ng-model="invoice.date" tabindex="21" type="date">
							</div>
						</div>

						<div class="input-group addon-input">
							<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.payment_terms_title" tabindex="22" value="Payment Terms">
							<div class="input-group-addon">
								<input class="form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.payment_terms" tabindex="23">
							</div>
						</div>

						<div class="input-group addon-input">
							<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.due_date_title" tabindex="24" value="Due Date">
							<div class="input-group-addon">
								<input class="form-control datepicker due-date ng-pristine ng-untouched ng-valid hasDatepicker" ng-model="invoice.due_date" tabindex="25" date-picker="" id="dp1638891295710">
							</div>
						</div>

						<div class="input-group addon-input">
							<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.purchase_order_title" tabindex="26" value="PO Number">
							<div class="input-group-addon">
								<input class="form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.purchase_order" tabindex="27">
							</div>
						</div>
					</div>
				</div>

				<div class="items-holder">
					<div class="items-table-header">
						<div class="amount">
							<div class="field bordered">
								<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.amount_header" tabindex="31">
							</div>
						</div>
						<div class="unit_cost">
							<div class="field bordered">
								<input class="input-label form-control ng-pristine ng-untouched ng-valid ng-valid-required" required="" ng-model="invoice.unit_cost_header" tabindex="30">
							</div>
						</div>
						<div class="quantity">
							<div class="field bordered">
								<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.quantity_header" tabindex="29">
							</div>
						</div>
						<div class="name">
							<div class="field bordered">
								<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.item_header" tabindex="28">
							</div>
						</div>
					</div>
					<div class="items-table">
						<!-- ngRepeat: (k, item) in invoice.items --><div class="item-row ng-scope" ng-repeat="(k, item) in invoice.items">
							<div class="main-row">
								<div class="delete ng-hide" ng-hide="invoice.items.length==1">
									<button type="button" class="delete-row" ng-click="deleteLineItem(item)" tabindex="45">
										<span class="fas fa-times"></span>
									</button>
								</div>
								<div class="amount value ng-binding" ng-bind-html="item.amount|currencyFormat:invoice.currency">$0.00</div>
								<div class="unit_cost">
									<div ng-tabindex="40+8*k+3" ng-model="item.unit_cost" currency="invoice.currency" ng-required="true" input-amount="" class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-valid-required" required="required"><div class="input-amount dropdown" ng-class="{'is-percent':!!isRate,'with-selector':hasSelector}"><div class="addon currency-sign ng-binding">$</div><input class="form-control ng-pristine ng-untouched ng-valid ng-valid-required" type="number" step="any" autocomplete="off" tabindex="43" ng-required="ngRequired" ng-model="value" ng-change="change()" required="required"><div class="addon percent">%</div><div class="addon selector"><button type="button" class="btn dropdown-toggle" aria-haspopup="true" aria-expanded="false"><span class="fas fa-chevron-down"></span></button></div><ul class="dropdown-menu dropdown-menu-right"><li ng-class="{active:!isRate}" class="active"><a href="#" ng-click="isRate=false;$event.preventDefault()" class="ng-binding">Flat ($)</a></li><li ng-class="{active:isRate}"><a href="#" ng-click="isRate=true;$event.preventDefault()">Percent (%)</a></li></ul></div></div>
								</div>
								<div class="quantity">
									<input type="number" step="any" class="form-control ng-pristine ng-untouched ng-valid ng-valid-required" autocomplete="off" ng-model="item.quantity" tabindex="42" placeholder="Quantity" required="">
								</div>
								<div class="name">
									<div class="expandingText" style="position: relative;"><textarea class="form-control ng-pristine ng-untouched ng-valid expanding-init" ng-model="item.name" tabindex="41" placeholder="Description of service or product..." expanding-textarea="" style="position: absolute; height: 100%; resize: none;"></textarea><pre class="textareaClone" style="visibility: hidden; border: 1px solid; white-space: pre-wrap; line-height: 20px; text-decoration: none solid rgb(49, 53, 56); font-size: 14px; font-family: NeueHaasUnica, Helvetica, Arial, sans-serif; word-break: normal; padding: 6px 12px; margin-bottom: 0px; position: relative;"><div> </div><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre></div>
								</div>
							</div>
						</div><!-- end ngRepeat: (k, item) in invoice.items -->
					</div>
					<div class="new-line">
						<button type="button" class="btn btn-primary" tabindex="1000" ng-click="addLineItem()">
							<span class="fas fa-plus"></span>
							Line Item
						</button>
					</div>
				</div>

				<div class="two-col clearfix">
					<div class="col footer">
						<div class="notes-holder">
							<div class="field">
								<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.notes_title" tabindex="1014" value="Notes">
							</div>
							<div class="value">
								<div class="expandingText" style="position: relative;"><textarea class="notes form-control ng-pristine ng-untouched ng-valid expanding-init" placeholder="Notes - any relevant information not already covered" ng-model="invoice.notes" tabindex="1015" expanding-textarea="" style="position: absolute; height: 100%; resize: none;"></textarea><pre class="textareaClone" style="visibility: hidden; border: 1px solid; white-space: pre-wrap; line-height: 20px; text-decoration: none solid rgb(49, 53, 56); font-size: 14px; font-family: NeueHaasUnica, Helvetica, Arial, sans-serif; word-break: normal; padding: 6px 12px; margin-bottom: 0px; position: relative;"><div> </div><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre></div>
							</div>
						</div>
						<div class="terms-holder">
							<div class="field">
								<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.terms_title" tabindex="1016" value="Terms">
							</div>
							<div class="value">
								<div class="expandingText" style="position: relative;"><textarea class="terms form-control ng-pristine ng-untouched ng-valid expanding-init" placeholder="Terms and conditions - late fees, payment methods, delivery schedule" ng-model="invoice.terms" tabindex="1017" expanding-textarea="" style="position: absolute; height: 100%; resize: none;"></textarea><pre class="textareaClone" style="visibility: hidden; border: 1px solid; white-space: pre-wrap; line-height: 20px; text-decoration: none solid rgb(49, 53, 56); font-size: 14px; font-family: NeueHaasUnica, Helvetica, Arial, sans-serif; word-break: normal; padding: 6px 12px; margin-bottom: 0px; position: relative;"><div> </div><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre></div>
							</div>
						</div>
					</div>
					<div class="col rates">
						<div class="input-group addon-input">
							<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.subtotal_title" tabindex="1001" value="subtotal">
							<div class="input-group-addon value deleteable ng-binding" ng-bind-html="invoice.subtotal|currencyFormat:invoice.currency">$0.00</div>
						</div>

						<div class="input-group addon-input ng-hide" ng-show="!!invoice.fields.discounts">
							<div class="delete">
								<button type="button" class="btn btn-link" ng-click="removeDiscount()">
									<span class="fas fa-times"></span>
								</button>
							</div>
							<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.discounts_title" tabindex="1002">
							<div class="input-group-addon input deleteable">
								<div input-amount="" is-rate="discountIsRate" currency="invoice.currency" ng-model="invoice.discounts" ng-tabindex="1003" has-selector="true" class="ng-pristine ng-untouched ng-valid ng-isolate-scope">
									<div class="input-amount dropdown with-selector" ng-class="{'is-percent':!!isRate,'with-selector':hasSelector}"><div class="addon currency-sign ng-binding">$</div>
									<input class="form-control ng-pristine ng-untouched ng-valid ng-valid-required" type="number" step="any" autocomplete="off" tabindex="1003" ng-required="ngRequired" ng-model="value" ng-change="change()">
									<div class="addon percent">%</div>
									<div class="addon selector">
										<button type="button" class="btn dropdown-toggle" aria-haspopup="true" aria-expanded="false">
											<span class="fas fa-chevron-down"></span></button></div>
											<ul class="dropdown-menu dropdown-menu-right">
												<li ng-class="{active:!isRate}" class="active">
													<a href="#" ng-click="isRate=false;$event.preventDefault()" class="ng-binding">Flat ($)</a>
												</li>
												<li ng-class="{active:isRate}">
													<a href="#" ng-click="isRate=true;$event.preventDefault()">Percent (%)</a>
												</li>
											</ul>
										</div>
									</div>
							</div>
						</div>

						<div class="input-group addon-input" ng-show="!!invoice.fields.tax">
							<div class="delete">
								<button type="button" class="btn btn-link" ng-click="removeTax()">
									<span class="fas fa-times"></span>
								</button>
							</div>
							<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.tax_title" tabindex="1004" value="Tax">
							<div class="input-group-addon input deleteable">
								<div input-amount="" is-rate="taxIsRate" currency="invoice.currency" ng-model="invoice.tax" ng-tabindex="1005" has-selector="true" class="ng-pristine ng-untouched ng-valid ng-isolate-scope"><div class="input-amount dropdown is-percent with-selector" ng-class="{'is-percent':!!isRate,'with-selector':hasSelector}"><div class="addon currency-sign ng-binding">$</div><input class="form-control ng-pristine ng-untouched ng-valid ng-valid-required" type="number" step="any" autocomplete="off" tabindex="1005" ng-required="ngRequired" ng-model="value" ng-change="change()"><div class="addon percent">%</div><div class="addon selector"><button type="button" class="btn dropdown-toggle" aria-haspopup="true" aria-expanded="false"><span class="fas fa-chevron-down"></span></button></div><ul class="dropdown-menu dropdown-menu-right"><li ng-class="{active:!isRate}"><a href="#" ng-click="isRate=false;$event.preventDefault()" class="ng-binding">Flat ($)</a></li><li ng-class="{active:isRate}" class="active"><a href="#" ng-click="isRate=true;$event.preventDefault()">Percent (%)</a></li></ul></div></div>
							</div>
						</div>

						<div class="input-group addon-input ng-hide" ng-show="!!invoice.fields.shipping">
							<div class="delete">
								<button type="button" class="btn btn-link" ng-click="removeShipping()">
									<span class="fas fa-times"></span>
								</button>
							</div>
							<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.shipping_title" tabindex="1006" value="Shipping">
							<div class="input-group-addon input deleteable">
								<div input-amount="" is-rate="false" currency="invoice.currency" ng-model="invoice.shipping" ng-tabindex="1007" class="ng-pristine ng-untouched ng-valid ng-isolate-scope"><div class="input-amount dropdown" ng-class="{'is-percent':!!isRate,'with-selector':hasSelector}"><div class="addon currency-sign ng-binding">$</div><input class="form-control ng-pristine ng-untouched ng-valid ng-valid-required" type="number" step="any" autocomplete="off" tabindex="1007" ng-required="ngRequired" ng-model="value" ng-change="change()"><div class="addon percent">%</div><div class="addon selector"><button type="button" class="btn dropdown-toggle" aria-haspopup="true" aria-expanded="false"><span class="fas fa-chevron-down"></span></button></div><ul class="dropdown-menu dropdown-menu-right"><li ng-class="{active:!isRate}" class="active"><a href="#" ng-click="isRate=false;$event.preventDefault()" class="ng-binding">Flat ($)</a></li><li ng-class="{active:isRate}"><a href="#" ng-click="isRate=true;$event.preventDefault()">Percent (%)</a></li></ul></div></div>
							</div>
						</div>

						<div class="add-rates">
							<button type="button" class="btn btn-link btn-sm" ng-click="addDiscount()" ng-hide="!!invoice.fields.discounts" tabindex="1008">
								<span class="fas fa-plus"></span>
								Discount
							</button>
							<button type="button" class="btn btn-link btn-sm ng-hide" ng-click="addTax()" ng-hide="!!invoice.fields.tax" tabindex="1009">
								<span class="fas fa-plus"></span>
								Tax
							</button>
							<button type="button" class="btn btn-link btn-sm" ng-click="addShipping()" ng-hide="!!invoice.fields.shipping" tabindex="1010">
								<span class="fas fa-plus"></span>
								Shipping
							</button>
						</div>

						<div class="input-group addon-input">
							<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.total_title" tabindex="1011" value="Total">
							<div class="input-group-addon value deleteable ng-binding" ng-bind-html="invoice.total|currencyFormat:invoice.currency">$0.00</div>
						</div>

						<div class="input-group addon-input">
							<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.amount_paid_title" tabindex="1012" value="Amount Paid">
							<div class="input-group-addon input deleteable">
								<div input-amount="" currency="invoice.currency" ng-model="invoice.amount_paid" ng-tabindex="1013" class="ng-pristine ng-untouched ng-valid ng-isolate-scope">
									<div class="input-amount dropdown" ng-class="{'is-percent':!!isRate,'with-selector':hasSelector}">
										<div class="addon currency-sign ng-binding">$</div>
										<input class="form-control ng-pristine ng-untouched ng-valid ng-valid-required" type="number" step="any" autocomplete="off" tabindex="1013" ng-required="ngRequired" ng-model="value" ng-change="change()">
										<div class="addon percent">%</div>
										<div class="addon selector">
											<button type="button" class="btn dropdown-toggle" aria-haspopup="true" aria-expanded="false">
												<span class="fas fa-chevron-down"></span>
											</button>
										</div>
										<ul class="dropdown-menu dropdown-menu-right">
											<li ng-class="{active:!isRate}" class="active">
												<a href="#" ng-click="isRate=false;$event.preventDefault()" class="ng-binding">Flat ($)</a>
											</li>
											<li ng-class="{active:isRate}">
												<a href="#" ng-click="isRate=true;$event.preventDefault()">Percent (%)</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="input-group addon-input">
							<input class="input-label form-control ng-pristine ng-untouched ng-valid" ng-model="invoice.balance_title" tabindex="1014" value="Balance Due">
							<div class="input-group-addon value deleteable ng-binding" ng-bind-html="invoice.balance|currencyFormat:invoice.currency">$0.00</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="invoice-controls mobile">
			<div class="btns clearfix visible-sm">
				<div class="btn-holder">
					<button class="btn btn-primary btn-lg btn-block" ng-disabled="invoiceForm.$invalid" ng-click="sendModal()" disabled="disabled">
						Send Invoice
					</button>
				</div>
				<div class="btn-holder">
					<button class="btn btn-link btn-lg btn-block" ng-disabled="invoiceForm.$invalid" ng-click="downloadModal()" disabled="disabled">
						<span class="fas fa-arrow-to-bottom"></span> Download Invoice
					</button>
				</div>
			</div>

			<div class="section selected-currency">
				<a href="#" ng-click="selectCurrency();$event.preventDefault()">
					Currency:
					<strong class="ng-binding">USD</strong>
					<span class="edit-icon"><span class="fas fa-pencil"></span></span>
				</a>
			</div>

			<div class="section save-template">
				<a href="#" ng-click="saveDefaults();$event.preventDefault()" ng-show="!isDefault()" class="ng-hide">
					Save template
				</a>
				<div class="using-default" ng-show="isDefault()">
					Using Default Template
				</div>
			</div>

			<div class="section my-invoices-btn visible-sm">
				<a href="/#/invoices">
					My Invoices
					<span class="badge ng-binding" ng-show="numInvoices>0">2</span>
				</a>
			</div>
		</div>
	</div>
</form></div>
    </div>

        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="category-title">Use Invoice Generator</div>
                        <ul>
                            <li>
                                <a href="">
                                    Invoice Template
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    How to Use
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Upgrade
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Release Notes
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Developer API
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="category-title">Education</div>
                        <ul>
                            <li>
                                <a href="">
                                    Invoicing Guide
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul>
                            <li class="copyright">
                                © 2021 Invoiced, Inc. All rights reserved.
                            </li>
                            <li>
                                <a href="/terms">
                                    Terms of Use
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <form method="post" action="/csv?source=lite" class="nomargin ng-pristine ng-valid" id="csv_form" target="_self">
            <input id="csv_json" type="hidden" name="json">
        </form>
        <form method="post" action="/pdf?source=lite" class="nomargin ng-pristine ng-valid" id="pdf_form" target="_self">
            <input id="pdf_json" type="hidden" name="json">
        </form>
        <form method="post" action="/ubl?source=lite" class="nomargin ng-pristine ng-valid" id="ubl_form" target="_self">
            <input id="ubl_json" type="hidden" name="json">
        </form>
    </div>
    </body>
</html>
