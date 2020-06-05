<?= $this->extend('layouts/backend') ?>


<?= $this->section('content')?>

<div class="content-header">
        <h4 class="title is-4">Datatables</h4>
        <span class="separator"></span>
        <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
            <ul>
                <li><a href="#">General</a></li>
                <li class="is-active"><a href="#" aria-current="page">Datatables</a></li>
            </ul>
        </nav>
    </div>

    <div class="content-body">
        <div class="card">
            <div class="card-filter">
                <div class="field">
                    <div class="control has-icons-left has-icons-right">
                        <input class="input" id="table-search" type="text" placeholder="Search for records...">
                        <span class="icon is-left">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
                <div class="field">
                    <div class="select">
                        <select id="table-length">
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
                <div class="field has-addons">
                    <p class="control">
                        <a class="button" href="#">
                            <span class="icon is-small">
                                <i class="fa fa-plus"></i>
                            </span>
                            <span>Create Record</span>
                        </a>
                    </p>
                    <p class="control">
                        <a class="button" id="table-reload">
                            <span class="icon is-small">
                                <i class="fa fa-refresh"></i>
                            </span>
                            <span>Reload</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="card-content">
                <table class="table is-hoverable is-bordered is-fullwidth" id="datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th class="has-text-centered">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Abu Bakar As-Shiddiq</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Umar bin Khattab</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Utsman bin Affan</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ali bin Abi Thalib</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Hamzah bin Abdul-Muththalib</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mush'ab bin Umair</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Zaid bin Haritsah</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Ja'far bin Abu Thalib</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Husain bin Ali</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Sa'ad bin Muadz</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Ammar bin Yasir</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Abad bin Bisyr</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Salim Maula Abi Hudzaifah</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Al-Bara' bin Malik</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Abu Dujanah</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Amr bin al-Jamuh</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Abu Ayyub al-Anshari</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Abu Thalhah</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Abdullah bin Jahsy</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Khubaib bin Adi</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Ikrimah bin Abu Jahal</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Khadijah Binti Khuwailid</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Imam Al-Ghazali</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Sofyan Ats-Tsauri</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Khalid bin Walid</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Utbah bin Ghazwan</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Mush'ab bin Umair</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Mu'adz bin Jabal</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Zaid bin Haritsah</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Fatimah binti Muhammad</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Bilal bin Rabah</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Abdullah bin Zubeir</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Zainab Binti Jahsy Bin Ri'ab</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Abu Ubaidah bin Jarrah</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>Ibnu Qayyim Al-Jauziyyah</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>Ibnu Katsir</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>Ibnu Taimiyyah</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>Ahmed Deedat</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>Yusuf Qardhawi</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>Imam Muslim</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td>Hasan Al Banna</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td>Tuanku Tambusai</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>43</td>
                            <td>Tuanku Imam Bonjol</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td>Sunan Gresik</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>45</td>
                            <td>Sunan Ampel</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>46</td>
                            <td>Sunan Bonang</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td>Sunan Drajat</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>48</td>
                            <td>Sunan Kudus</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>49</td>
                            <td>Sunan Giri</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td>Sunan Kalijaga</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>51</td>
                            <td>Sunan Muria</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>52</td>
                            <td>Sunan Gunung Jati</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>53</td>
                            <td>Jumadil Qubro</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="countries/edit/1.html" class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
            </div>

<?= $this->endSection()?>

<?= $this->section('scripts')?>
<script>
        $(document).ready(function() {
            var table = $('#datatable').DataTable({
                dom: "<'columns table-wrapper'<'column is-12'tr>><'columns table-footer-wrapper'<'column is-5'i><'column is-7'p>>"
            });

            $('#table-search').on('keyup', function() {
                let value = $(this).val();
                table.search(value).draw();
            });

            $('#table-length').on('change', function() {
                let value = $(this).val();
                table.page.len(value).draw();
            });

            $('#table-reload').on('click', function() {
                table.draw();
            });
        });
    </script>
<?= $this->endSection()?>
