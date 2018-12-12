<?php include "includes/admin_header.php" ?>

<div id="wrapper">

    <?php include "includes/admin_navigation.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        WELCOME TO ADMIN
                        <small>Author</small>
                    </h1>


                    <div class="col-xs-6">


                        <?php 

                        # ADD CATEGORY QUERY EXECUTION FOR FORM BELOW

                        insert_categories();

                        ?>




            <!-- FORM TO ADD CATEGORY -->
                        <form action="" method="post">

                            <div class="form-group">
                                <label for="cat_title">Add Category</label>
                                <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add category">


                            </div>
                        </form>




                <!--EDIT CATEGORY EXECUTION  -->

                        <?php 


                        if (isset($_GET['edit'])) {

                            $cat_id = $_GET['edit'];

                            include "includes/update_categories.php";
                        }


                        ?>

                    </div>


                    
                    
                    <!-- table for category list display -->


                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>



                                <?php 

                                # FIND ALL CATEGORIES

                                findAllCategories();

                                ?>



                                <?php 

                                # DELETE QUERY

                                deleteCategories();

                                ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->



    <?php include "includes/admin_footer.php" ?>