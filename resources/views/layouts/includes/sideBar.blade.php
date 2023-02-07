<nav class="active" id="sidebar">

    <ul class="list-unstyled lead">

        <li class="active">
            <a href=""><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
            <a href="{{route('orders.index')}}"><i class="fa fa-box"></i>Orders</a>
        </li>
        <li>
            <a href="{{route('transactions.index')}}"><i class="fa fa-money-bill"></i>Transactions</a>
        </li>
        <li>
            <a href="{{route('products.index')}}"><i class="fa fa-truck"></i> Product</a>
        </li>
        
    </ul>

</nav>

<style>

    #sidebar ul.lead {
        border-bottom: 1px solid #47748b;
        width: fit-content;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        width: 30vh;
        color: #008B8B;
    }

    #sidebar ul li a:hover {
        background-color: #008B8B;
        color: #ffffff;
        text-decoration: none !important;
    }

    #sidebar ul li a i{
        margin-right: 30px;
    }

    #sidebar ul li.active>a, a[aria-expanded="true"]{
        color: #ffffff;
        background: #008B8B;
    }


</style>