<?php
class searchUsersView
{
    function paginateSearchUsers()
    {
?>
        <form id="">
            <div class="row row-cols-1 row-cols-md-5 g-2 ">
                <div class="col d-flex flex-sm-column justify-content-between">
                    <label class="textLabelSearch">Nombres</label>
                    <input class="col-8 col-lg-10 textInput p-2" type="text" name="" id="">
                </div>
                <div class="col d-flex flex-sm-column justify-content-between">
                    <label class="textLabelSearch">Apellidos</label>
                    <input class="col-8 col-lg-10 textInput p-2" type="text" name="" id="">
                </div>
                <div class="col d-flex flex-sm-column justify-content-between">
                    <label class="textLabelSearch">Documento</label>
                    <input class="col-8 col-lg-10 textInput p-2" type="number" name="" id="">
                </div>
                <div class="col d-flex flex-sm-column justify-content-between">
                    <label class="textLabelSearch">Codigo</label>
                    <input class="col-8 col-lg-10 textInput p-2" type="number" name="" id="">
                </div>
                <div class="col d-flex flex-sm-column justify-content-between">
                    <label class="textLabelSearch">Rol</label>
                    <select class="textInput textInputSelect col-8 col-lg-10 p-2">
                        <option class="textInput p-2" selected></option>
                        <option class="textInput p-2" value="1">One</option>
                        <option class="textInput p-2" value="2">Two</option>
                        <option class="textInput p-2" value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-center justify-content-lg-start">
                <button type="button" class="align-items-center col-10 col-lg-2 mt-2 buttonSearch">Consultar</button>
            </div>
            </div>
        </form>
<?php
    }
}
