<!doctype html>
<html>
<head>
  <title>Create Product | Product Store</title>
  <!-- styling etc. -->
</head>
<body>
    <form class="form-horizontal" action="/products/create" method="get">
        {{ csrf_field() }}
    <div class="flex-center position-ref full-height">
        <div class="content">
                <h1> Enter Details to create a product</h1>
                <div class="form-input">
                    <label>Name</label> <input type="text" name="name">
                </div>

                <div class="form-input">
                    <label>Description</label> <input type="text" name="description">
                </div>

                <div class="form-input">
                    <label>Count</label> <input type="number" name="count">
                </div>

                <div class="form-input">
                    <label>Price</label> <input type="number" name="price">
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

