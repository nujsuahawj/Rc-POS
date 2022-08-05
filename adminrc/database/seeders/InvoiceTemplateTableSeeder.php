<?php

namespace Database\Seeders;

use App\Models\InvoiceTemplate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceTemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InvoiceTemplate::query()->truncate();

        //Small sales
        DB::table("invoice_templates")->insert([
            'template_type' => 'sales',
            'is_default_template' => 0,
            'invoice_size' => 'small',
            'template_title' => 'Small Sales Invoice',
            'default_content' =>
                '<div class="invoice-page-wrapper">
                <div class="thermal-invoice" style="width: 70mm;">
                    <!--Invoice Header-->
                    <div class="text-center invoice-header mb-3">
                    
                        <!--Invoice Logo-->
                        <img src="{logo_source}" width="100" class="img-fluid" alt="">
                        <div class="app-name my-2">{app_name}</div>
                        <div>
                            <h6 class="text-uppercase font-weight-bold">Sales Invoice</h6>
                        </div>
                        <small class="font-weight-bold">
                            {date} - {time}
                        </small>
                    </div>
    
                    <!--Invoice Info-->
                    <div class="mb-3 font-weight-bold invoice-info">
                        <p class="mb-1">
                            <span class="font-weight-bold">Invoice ID: </span> {invoice_id}
                        </p>
                         <p class="mb-1">
                            <span class="font-weight-bold">Sold To: </span> {customer_name}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">Sold By: </span> {employee_name}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">Phone: </span> {phone_number}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">Address: </span> {address}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">TIN: </span> {tin}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">Note: </span> {note}
                        </p>
                    </div>
    
                    <!--Invoice Body-->
                    <table class="table table-borderless">
                        <tbody class="font-weight-bold">
                            <tr class="border-top border-bottom t-header">
                                <th class="w-25 pl-0">Price</th>
                                <th class="text-right">Qty</th>
                                <th class="text-right">Disc%</th>
                                <th class="text-right pr-0">Total</th>
                            </tr>
                            <tr><td>{item_details}</td></tr>
                            <tr class="t-footer border-top">
                                <td class="text-left">Subtotal</td>
                                <td class="font-weight-bold" colspan="3">{sub_total}</td>
                            </tr>
                            <tr class="t-footer">
                                <td class="text-left">Shipment</td>
                                <td class="font-weight-bold" colspan="3">{shipment_amount}</td>
                            </tr>
                            <tr class="t-footer"> 
                                <td class="text-left">Tax</td>
                                <td class="font-weight-bold" colspan="3">{tax}</td>
                            </tr>
                            <tr class="t-footer">
                                <td class="text-left">Discount</td>
                                <td class="font-weight-bold" colspan="3">{discount}</td>
                            </tr>
                            <tr class="t-footer">
                                <td class="text-left">Total</td>
                                <td class="font-weight-bold" colspan="3">{total}</td>
                            </tr>
                            <tr><td>{payment_details}</td></tr>
                            <tr class="t-footer">
                                <td class="text-left">Exchange</td>
                                <td class="font-weight-bold" colspan="3">{exchange}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="shipment-address">{shipment_address}</div>
                    <div class="text-center">{barcode}</div>
                </div>
            </div>'
        ]);

        //Large sales
        DB::table("invoice_templates")->insert([
            'template_type' => 'sales',
            'is_default_template' => 1,
            'invoice_size' => 'large',
            'template_title' => 'Large Sales Invoice',
            'default_content' =>
                '<div class="invoice-page-wrapper">
                <div class="thermal-invoice" style="width: 95mm;">
                    <!--Invoice Header-->
                    <div class="text-center invoice-header mb-3">
                    
                        <!--Invoice Logo-->
                        <img src="{logo_source}" width="100" class="img-fluid" alt="">
                        <div class="app-name my-2">{app_name}</div>
                        <div>
                            <h6 class="text-uppercase font-weight-bold">Sales Invoice</h6>
                        </div>
                        <small class="font-weight-bold">
                            {date} - {time}
                        </small>
                    </div>
    
                    <!--Invoice Info-->
                    <div class="mb-3 font-weight-bold invoice-info">
                        <p class="mb-1">
                            <span class="font-weight-bold">Invoice ID: </span> {invoice_id}
                        </p>
                         <p class="mb-1">
                            <span class="font-weight-bold">Sold To: </span> {customer_name}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">Sold By: </span> {employee_name}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">Phone: </span> {phone_number}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">Address: </span> {address}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">TIN: </span> {tin}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">Note: </span> {note}
                        </p>
                    </div>
    
                    <!--Invoice Body-->
                    <table class="table table-borderless">
                        <tbody class="font-weight-bold">
                            <tr class="border-top border-bottom t-header">
                                <th class="pl-0">Items</th>
                                <th class="text-right">Qty</th>
                                <th class="text-right">Price</th>
                                <th class="text-right">Discount</th>
                                <th class="text-right pr-0">Total</th>
                            </tr>
                            <tr><td>{item_details}</td></tr>
                            <tr class="t-footer border-top">
                                <td class="text-left">Subtotal</td>
                                <td class="font-weight-bold" colspan="4">{sub_total}</td>
                            </tr>
                            <tr class="t-footer">
                                <td class="text-left">Shipment</td>
                                <td class="font-weight-bold" colspan="4">{shipment_amount}</td>
                            </tr>
                            <tr class="t-footer">
                                <td class="text-left">Tax</td>
                                <td class="font-weight-bold" colspan="4">{tax}</td>
                            </tr>
                            <tr class="t-footer">
                                <td class="text-left">Discount</td>
                                <td class="font-weight-bold" colspan="4">{discount}</td>
                            </tr>
                            <tr class="t-footer">
                                <td class="text-left">Total</td>
                                <td class="font-weight-bold" colspan="4">{total}</td>
                            </tr>
                            <tr><td>{payment_details}</td></tr>
                            <tr class="t-footer">
                                <td class="text-left">Exchange</td>
                                <td class="font-weight-bold" colspan="4">{exchange}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="shipment-address">{shipment_address}</div>
                    <div class="text-center">{barcode}</div>
                </div>
            </div>'

        ]); //Large sales ends


        //Small purchase
        DB::table("invoice_templates")->insert([
            'template_type' => 'receiving',
            'is_default_template' => 0,
            'invoice_size' => 'small',
            'template_title' => 'Small Purchase Invoice',
            'default_content' =>
                '<div class="invoice-page-wrapper">
                <div class="thermal-invoice" style="width: 70mm;">
                    <!--Invoice Header-->
                    <div class="text-center invoice-header mb-3">
                    
                        <!--Invoice Logo-->
                         <img src="{logo_source}" width="100" class="img-fluid" alt="">
                        <div class="app-name my-2">{app_name}</div>
                        <div>
                            <h6 class="text-uppercase font-weight-bold">Purchase Invoice</h6>
                        </div>
                        <small class="font-weight-bold">
                            {date} - {time}
                        </small>
                    </div>
    
                    <!--Invoice Info-->
                    <div class="mb-3 font-weight-bold invoice-info">
                        <p class="mb-1">
                            <span class="font-weight-bold">Invoice ID: </span> {invoice_id}
                        </p>
                         <p class="mb-1">
                            <span class="font-weight-bold">Supplier: </span> {supplier_name}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">TIN: </span> {tin}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">Purchased By: </span> {employee_name}
                        </p>
                    </div>
    
                    <!--Invoice Body-->
                    <table class="table table-borderless">
                        <tbody class="font-weight-bold">
                            <tr class="border-top border-bottom t-header">
                                <th class="w-25 pl-0">Price</th>
                                <th class="text-right">Qty</th>
                                <th class="text-right">Disc%</th>
                                <th class="text-right pr-0">Total</th>
                            </tr>
                            <tr><td>{item_details}</td></tr>
                            <tr class="t-footer border-top">
                                <td>Subtotal</td>
                                <td class="font-weight-bold" colspan="3">{sub_total}</td>
                            </tr>
                            <tr class="t-footer">
                                <td>Tax</td>
                                <td class="font-weight-bold" colspan="3">{tax}</td>
                            </tr>
                            <tr class="t-footer">
                                <td>Discount</td>
                                <td class="font-weight-bold" colspan="3">{discount}</td>
                            </tr>
                            <tr class="t-footer">
                                <td>Total</td>
                                <td class="font-weight-bold" colspan="3">{total}</td>
                            </tr>
                            <tr><td>{payment_details}</td></tr>
                            <tr class="t-footer">
                                <td>Exchange</td>
                                <td class="font-weight-bold" colspan="3">{exchange}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center">{barcode}</div>
                </div>
            </div>'
        ]); //Small purchase ends


        //Large purchase
        DB::table("invoice_templates")->insert([
            'template_type' => 'receiving',
            'is_default_template' => 1,
            'invoice_size' => 'large',
            'template_title' => 'Large Purchase Invoice',
            'default_content' =>
                '<div class="invoice-page-wrapper">
                <div class="thermal-invoice" style="width: 95mm;">
                    <!--Invoice Header-->
                    <div class="text-center invoice-header mb-3">
                    
                        <!--Invoice Logo-->
                       <img src="{logo_source}" width="100" class="img-fluid" alt="">
                        <div class="app-name my-2">{app_name}</div>
                        <div>
                            <h6 class="text-uppercase font-weight-bold">Purchase Invoice</h6>
                        </div>
                        <small class="font-weight-bold">
                            {date} - {time}
                        </small>
                    </div>
    
                    <!--Invoice Info-->
                    <div class="mb-3 font-weight-bold invoice-info">
                        <p class="mb-1">
                            <span class="font-weight-bold">Invoice ID: </span> {invoice_id}
                        </p>
                         <p class="mb-1">
                            <span class="font-weight-bold">Supplier: </span> {supplier_name}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">TIN: </span> {tin}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">Purchased By: </span> {employee_name}
                        </p>
                    </div>
    
                    <!--Invoice Body-->
                    <table class="table table-borderless">
                        <tbody class="font-weight-bold">
                            <tr class="border-top border-bottom t-header">
                                <th class="pl-0">Items</th>
                                <th class="text-right">Qty</th>
                                <th class="text-right">Price</th>
                                <th class="text-right">Discount</th>
                                <th class="text-right pr-0">Total</th>
                            </tr>
                            <tr><td>{item_details}</td></tr>
                            <tr class="t-footer border-top">
                                <td>Subtotal</td>
                                <td class="font-weight-bold" colspan="4">{sub_total}</td>
                            </tr>
                            <tr class="t-footer">
                                <td>Tax</td>
                                <td class="font-weight-bold" colspan="4">{tax}</td>
                            </tr>
                            <tr class="t-footer">
                                <td>Discount</td>
                                <td class="font-weight-bold" colspan="4">{discount}</td>
                            </tr>
                            <tr class="t-footer">
                                <td>Total</td>
                                <td class="font-weight-bold" colspan="4">{total}</td>
                            </tr>
                            <tr><td>{payment_details}</td></tr>
                            <tr class="t-footer">
                                <td>Exchange</td>
                                <td class="font-weight-bold" colspan="4">{exchange}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center">{barcode}</div>
                </div>
            </div>'
        ]);  //Large purchase ends
    }
}