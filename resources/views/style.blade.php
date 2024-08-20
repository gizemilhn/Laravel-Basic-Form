<style>

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        background-color: #b0bec5;
    }


    .sidebar {
        width: 250px;
        background-color: #2c3e50;
        color: #ecf0f1;
        height: 100vh;
        padding-top: 20px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        margin: 0;
        padding: 0;
    }

    .sidebar-nav {
        list-style: none;
        padding: 0;
    }

    .nav {
        padding: 0;
    }

    .nav-item {
        margin: 0;
    }

    .nav-link {
        display: block;
        padding: 10px 20px;
        color: #ecf0f1;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .nav-link:hover {
        background-color: #34495e;
    }

    .nav-link i {
        margin-right: 10px;
    }


    .main-content {
        margin-left: 250px;
        padding: 80px 20px 20px 20px;
        background-color: #b0bec5;
        color: #2c3e50;
        width: calc(100% - 250px);
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;


        .navbar {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 250px;
            width: calc(100% - 250px);
            z-index: 1001;
        }

        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .navbar-brand {
            color: #ecf0f1;
            text-decoration: none;
            font-size: 24px;

        }

        .navbar-search {
            display: flex;
            margin-right: 50px;
        }

        .navbar-search input {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            margin-right: 10px;
        }

        .navbar-search button {
            padding: 5px 10px;
            background-color: #007bff;
            border: none;
            color: #ffffff;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .navbar-search button:hover {
            background-color: #0056b3;
        }


        .footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: calc(100%);


        }


        .container {
            max-width: 100%;
            padding: 20px;
            margin: 0;
        }


        .form-container {
            width: 80%;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-left: 250px;
            margin-right: 1000px;
        }


        .form-label {
            font-weight: bold;
            color: #495057;
        }


        .form-control {
            border-radius: 4px;
            border: 1px solid #ced4da;
            padding: 12px;
            margin-bottom: 20px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            width: 90%;
        }


        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }



        .btn-primary {
            background-color: #007bff;
            border: none;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .text-danger {
            color: red;
        }


        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
                padding-top: 60px;
                width: 100%;
            }

            .navbar {
                width: 100%;
                position: relative;
                left: 0;
            }

            .footer {
                width: 100%;
                position: relative;
                margin-left: 0;
            }

            .navbar-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-search {
                width: 100%;
            }
        }
    }
</style>
