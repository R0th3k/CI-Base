<?= $this->extend('layouts/backend') ?>


<?= $this->section('content')?>


<div class="content-header">
        <h4 class="title is-4">Forms</h4>
        <span class="separator"></span>
        <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
            <ul>
                <li><a href="#">General</a></li>
                <li class="is-active"><a href="#" aria-current="page">Forms</a></li>
            </ul>
        </nav>
    </div>

    <div class="content-body">
        <div class="columns">
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">General</p>
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Username</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input is-success" type="text" placeholder="Text input" value="bulma">
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user"></i>
                                </span>
                                <span class="icon is-small is-right">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                            <p class="help is-success">This username is available</p>
                        </div>

                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input is-danger" type="email" placeholder="Email input"
                                    value="hello@">
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right">
                                    <i class="fa fa-exclamation-triangle"></i>
                                </span>
                            </div>
                            <p class="help is-danger">This email is invalid</p>
                        </div>

                        <div class="field">
                            <label class="label">Subject</label>
                            <div class="control">
                                <div class="select">
                                    <select>
                                        <option>Select dropdown</option>
                                        <option>With options</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Message</label>
                            <div class="control">
                                <textarea class="textarea" placeholder="Textarea"></textarea>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    I agree to the <a href="#">terms and conditions</a>
                                </label>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" name="question">
                                    Yes
                                </label>
                                <label class="radio">
                                    <input type="radio" name="question">
                                    No
                                </label>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link">Submit</button>
                            </div>
                            <div class="control">
                                <button class="button is-text">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">Loading</p>
                        <div class="field">
                            <div class="control is-small is-loading">
                                <input class="input is-small" type="text" placeholder="Small loading input">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control is-loading">
                                <input class="input" type="text" placeholder="Normal loading input">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control is-medium is-loading">
                                <input class="input is-medium" type="text" placeholder="Medium loading input">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control is-large is-loading">
                                <input class="input is-large" type="text" placeholder="Large loading input">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">Checkboxes &amp; Radios</p>
                        <div class="field">
                            <label class="checkbox">
                                <input type="checkbox">
                                Remember me
                            </label>
                        </div>
                        <div class="field">
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" name="rsvp">
                                    Going
                                </label>
                                <label class="radio">
                                    <input type="radio" name="rsvp">
                                    Not going
                                </label>
                                <label class="radio" disabled>
                                    <input type="radio" name="rsvp" disabled>
                                    Maybe
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">Colors</p>
                        <div class="field">
                            <div class="control">
                                <input class="input is-primary" type="text" placeholder="Primary input">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input class="input is-info" type="text" placeholder="Info input">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input class="input is-success" type="text" placeholder="Success input">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input class="input is-warning" type="text" placeholder="Warning input">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input class="input is-danger" type="text" placeholder="Danger input">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">Sizes</p>
                        <div class="field">
                            <div class="control">
                                <input class="input is-small" type="text" placeholder="Small input">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" placeholder="Normal input">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input class="input is-medium" type="text" placeholder="Medium input">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input class="input is-large" type="text" placeholder="Large input">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">Select</p>
                        <div class="field">
                            <div class="control">
                                <div class="select is-small">
                                    <select>
                                        <option>Select dropdown</option>
                                        <option>With options</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <div class="select">
                                    <select>
                                        <option>Select dropdown</option>
                                        <option>With options</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <div class="select is-medium">
                                    <select>
                                        <option>Select dropdown</option>
                                        <option>With options</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <div class="select is-large">
                                    <select>
                                        <option>Select dropdown</option>
                                        <option>With options</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control has-icons-left">
                                <div class="select is-small">
                                    <select>
                                        <option selected>Country</option>
                                        <option>Select dropdown</option>
                                        <option>With options</option>
                                    </select>
                                </div>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-globe"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control has-icons-left">
                                <div class="select">
                                    <select>
                                        <option selected>Country</option>
                                        <option>Select dropdown</option>
                                        <option>With options</option>
                                    </select>
                                </div>
                                <span class="icon is-left">
                                    <i class="fa fa-globe"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control has-icons-left">
                                <div class="select is-medium">
                                    <select>
                                        <option selected>Country</option>
                                        <option>Select dropdown</option>
                                        <option>With options</option>
                                    </select>
                                </div>
                                <span class="icon is-medium is-left">
                                    <i class="fa fa-globe"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control has-icons-left">
                                <div class="select is-large">
                                    <select>
                                        <option selected>Country</option>
                                        <option>Select dropdown</option>
                                        <option>With options</option>
                                    </select>
                                </div>
                                <span class="icon is-large is-left">
                                    <i class="fa fa-globe"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">File Input</p>
                        <div class="field">
                            <div class="file is-primary">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="resume">
                                    <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fa fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            Primary file…
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="field">
                            <div class="file is-info has-name">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="resume">
                                    <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fa fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            Info file…
                                        </span>
                                    </span>
                                    <span class="file-name">
                                        Screen Shot 2017-07-29 at 15.54.25.png
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="field">
                            <div class="file is-warning is-boxed">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="resume">
                                    <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fa fa-cloud-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            Warning file…
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="field">
                            <div class="file is-danger has-name is-boxed">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="resume">
                                    <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fa fa-cloud-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            Danger file…
                                        </span>
                                    </span>
                                    <span class="file-name">
                                        Screen Shot 2017-07-29 at 15.54.25.png
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
    </div>


<?= $this->endSection()?>


   