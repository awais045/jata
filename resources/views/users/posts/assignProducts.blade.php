@if (isset($campaign->catalog_id))
    <div class="col-md-12">
        <div class="card" style="background: #EEF9FFE5;border: none;">
            <div class="card" style="background: #EEF9FFE5;border: none;">
                <div class="card-body" style="padding:10px;">
                    <label style="color: #2E32388F;font-size: 12px !important;">Catalog ID</label>
                    <input type="text" class="form-control Ty pe" style="border:none;background: #EEF9FFE5;"
                        name="catalog_id" value="{{ $campaign->catalog_id }}" placeholder="Stream URL" disabled>
                </div>
            </div>

            <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-12 table-responsive">
                        <table class="table table-success" style="border: 1px solid #2E32381F;border-radius: 16px;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th scope="col" class=" t-heading">
                                        Produktnavn</th>
                                    <th scope="col" class=" t-heading">View Product
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($campaign->productAssign as $kk => $product)
                                    <tr>
                                        <td>{{ $kk }}</td>
                                        <td class="heading ">
                                            {{ $userProducts[$product->product_id] }}
                                        </td>
                                        <td class="heading ">
                                            <a href="{{ url('product-catalog/' . $product->product_id . '/edit') }}"
                                                target="_blank">
                                                View Product</a>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
            </div>
@endif
</div>
</div>
