<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="card-title">Post Task</h3>
                    </div>

                    <div class="card-body">
                        <form @submit.prevent="" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <popper
                                                trigger="clickToOpen"
                                                :options="{
                                                              placement: 'top',
                                                              modifiers: { offset: { offset: '0,10px' } }
                                                            }">
                                                <div class="popper" style="padding: 4px;">
                                                    <b>Writer's choice:</b> We determine the title of the task for you.
                                                    <br>
                                                    <b>Input Title:</b> You define your own title for the task.
                                                </div>

                                                <i class="fas fa-info-circle ml-1"
                                                   style="color: blue; font-size: 20px;" slot="reference"></i>
                                            </popper>

                                            <br>
                                            <button type="button" :class="'btn btn-sm mb-2 ' + btnOne"
                                                    @click="writerChoice">
                                                Writer's Choice
                                            </button>
                                            <button type="button" :class="'btn btn-sm mb-2 ' + btnTwo" @click="manual">
                                                Input Title
                                            </button>
                                            <br>
                                            <small style="color: red;">{{e_title}}</small>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group" v-if="isManual == 1">
                                            <label for="title">Input Title</label>
                                            <input v-model="form.title" type="text" class="form-control" name="title"
                                                   id="title"
                                                   placeholder="Title"
                                                   :class="{ 'is-invalid': form.errors.has('title') }">
                                            <has-error :form="form" field="title"></has-error>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="level">Level</label>
                                            <select v-model="form.level" class="form-control" name="level" id="level"
                                                    :class="{ 'is-invalid': form.errors.has('level') }">
                                                <option selected value="">--Select Level--</option>
                                                <option v-for="level in levels.data" :key="level['name']"
                                                        :value="level['name']">{{ level.name}}
                                                </option>
                                            </select>
                                            <has-error :form="form" field="level"></has-error>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <select v-model="form.subject" class="form-control" name="subject"
                                                    id="subject"
                                                    :class="{ 'is-invalid': form.errors.has('subject') }">
                                                <option selected value="">--Select Subject--</option>
                                                <option v-for="subject in subjects" :key="subject['name']"
                                                        :value="subject['name']">{{ subject.name}}
                                                </option>
                                            </select>
                                            <has-error :form="form" field="subject"></has-error>
                                        </div>
                                        <div class="form-group" v-if="this.form.subject == 'Other'">
                                            <label for="other_subject">Input Your Subject</label>
                                            <input v-model="form.other_subject" type="text" class="form-control" name="other_subject"
                                                   id="other_subject"
                                                   placeholder="Your Subject"
                                                   :class="{ 'is-invalid': form.errors.has('other_subject') }">
                                            <has-error :form="form" field="other_subject"></has-error>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="type">Document Type</label>
                                            <select v-model="form.type" class="form-control" name="type" id="type"
                                                    :class="{ 'is-invalid': form.errors.has('type') }">
                                                <option selected value="">--Select Document Type--</option>
                                                <option v-for="document in documents" :key="document['name']"
                                                        :value="document['name']">{{ document.name}}
                                                </option>
                                            </select>
                                            <has-error :form="form" field="type"></has-error>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>No. of Pages</label><br>
                                            <vue-numeric-input v-model="form.pages" :min="1" :step="1"
                                                               :class="{ 'is-invalid': form.errors.has('pages') }"></vue-numeric-input>
                                            <!-- <input v-model="form.pages" type="number" min="1" class="form-control" name="pages" id="pages"
                                                   placeholder="Pages" :class="{ 'is-invalid': form.errors.has('pages') }"> -->
                                            <small style="color: red;">{{e_pages}}</small>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Deadline Date & Time</label>
                                            <datetime type="datetime" :auto="true" :min-datetime="this.now" zone="local"
                                                      value-zone="UTC+3" v-model="form.date"
                                                      class="{ 'is-invalid': form.errors.has('date') }"
                                                      placeholder="Click here to input"
                                                      style="border: 1px solid rgba(0,0,0,0.35); padding: 2px;"></datetime>
                                            <small style="color: red;">{{e_date}}</small>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="spacing">Spacing</label><br>
                                        <div class="form-check form-check-inline">
                                            <input v-model="form.spacing" class="form-check-input" type="radio"
                                                   name="spacing" value="single"
                                                   :class="{ 'is-invalid': form.errors.has('spacing') }">
                                            <label class="form-check-label">Single</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input v-model="form.spacing" class="form-check-input" type="radio"
                                                   name="spacing" id="spacing" value="double"
                                                   :class="{ 'is-invalid': form.errors.has('spacing') }">
                                            <label class="form-check-label">Double</label><br>
                                            <has-error :form="form" field="spacing"></has-error>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Format</label>
                                            <select v-model="form.format" class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('format') }">
                                                <option selected value="">--Select Format--</option>
                                                <option value="APA">APA</option>
                                                <option value="MLA">MLA</option>
                                                <option value="Chicago">Chicago</option>
                                                <option value="Turabian">Turabian</option>
                                                <option value="IEEE">IEEE</option>
                                            </select>
                                            <has-error :form="form" field="format"></has-error>
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="task">Task</label>
                                    <textarea v-model="form.task" class="form-control" id="task" rows="3"
                                              :class="{ 'is-invalid': form.errors.has('task') }"></textarea>
                                    <has-error :form="form" field="task"></has-error>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="files">Upload Files (.xlsx, .xls, images, .doc, .docx,.ppt, .pptx, .pdf,
                                        .zip ONLY)</label>
                                    <input type="file" multiple class="form-control-file" @change="fieldChange"
                                           id="files" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.pdf,.zip">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label>Suggested</label>
                                    <popper
                                        trigger="clickToOpen"
                                        :options="{
                                                              placement: 'top',
                                                              modifiers: { offset: { offset: '0,10px' } }
                                                            }">
                                        <div class="popper" style="padding: 4px;">
                                            <p>Estimated cost for the task</p>
                                        </div>

                                        <i class="fas fa-info-circle ml-1"
                                           style="color: blue; font-size: 20px;" slot="reference"></i>
                                    </popper>
                                    <br>
                                    <button @click="getDiff()" type="button" class="btn btn-success btn-sm">Compute
                                    </button>
                                    <p>Amount to pay: ${{this.suggestion}}</p>
                                </div>
                                <div class="form-group" v-if="this.isOk == 1">
                                    <label for="budget">Your Budget</label>
                                    <input v-model="form.budget" type="number" class="form-control" name="budget"
                                           id="budget"
                                           placeholder="budget" :class="{ 'is-invalid': form.errors.has('budget') }">
                                    <has-error :form="form" field="budget"></has-error>
                                </div>

                            </div>
                            <div class="modal-footer" v-if="this.isOk == 1">
                                <button type="submit" class="btn btn-success" @click="lastValidation()" :disabled="state">
                                    <i class="fa fa-send"></i>
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import 'vue-datetime/dist/vue-datetime.css';
    import Popper from 'vue-popperjs';
    import 'vue-popperjs/dist/vue-popper.css';

    export default {
        components: {
            'popper': Popper
        },
        data() {
            return {
                isManual: 0,
                btnOne: "btn-info",
                btnTwo: "btn-info",
                attachments: [],
                now: moment().format(),
                levels: {},
                documents: {},
                subjects: {},
                suggestion: 0,
                e_date: '',
                e_title: '',
                e_pages: '',
                isOk: '',
                diff: '',
                state: false,
                formf: new FormData(),
                form: new Form({
                    title: '',
                    level: '',
                    subject: '',
                    type: '',
                    pages: 1,
                    spacing: '',
                    date: '',
                    time: '',
                    task: '',
                    budget: '',
                    format: '',
                    other_subject: ''
                })
            }
        },
        methods: {
            lastValidation() {
                if (!this.form.budget) {
                    this.form.errors.set({
                        budget: 'This field is required'
                    })
                    return false;
                } else {
                    this.submit();
                }
            },
            manual() {
                this.e_title = "";
                this.btnOne = "btn-info";
                this.isManual = 1;
                this.btnTwo = "btn-success";
                this.form.title = "";
            },
            writerChoice() {
                this.e_title = "";
                this.btnTwo = "btn-info";
                this.isManual = 0;
                this.form.title = "Writer's Choice";
                this.btnOne = "btn-success";
            },
            loadSubjects() {
                axios.get("api/subject").then(({data}) => (this.subjects = data));
            },
            loadDocuments() {
                axios.get("api/document").then(({data}) => (this.documents = data));
            },
            getLevels() {
                axios.get("/api/level").then(({data}) => ([this.levels = data]));
            },
            getDiff() {
                if (!this.form.title) {
                    this.e_title = "Please select an option";
                    this.form.errors.set({
                        title: 'This field is required'
                    })
                    return false;
                } else if (!this.form.level) {
                    // set(type, 'required');
                    this.form.errors.set({
                        level: 'This field is required'
                    })
                    return false;
                } else if (!this.form.subject) {
                    // set(type, 'required');
                    this.form.errors.set({
                        subject: 'This field is required'
                    })
                    return false;
                }else if (this.form.subject == 'Other' && !this.form.other_subject) {
                    // set(type, 'required');
                    this.form.errors.set({
                        other_subject: 'This field is required'
                    })
                    return false;
                } else if (!this.form.type) {
                    // set(type, 'required');
                    this.form.errors.set({
                        type: 'This field is required'
                    })
                    return false;
                } else if (!this.form.date) {
                    this.e_date = "This field is required";
                    return false;
                } else if (!this.form.spacing) {
                    this.e_date = "";
                    this.form.errors.set({
                        spacing: 'This field is required'
                    })
                    return false;
                } else if (!this.form.pages) {
                    this.e_pages = "This field is required";
                    return false;
                } else if (!this.form.format) {
                    this.e_date = "";
                    this.form.errors.set({
                        format: 'This field is required'
                    })
                    return false;
                } else {
                    // console.log(moment(this.form.date).format('MMMM Do YYYY, h:mm'));
                    let dd = this.form.date;
                    let diff = moment(dd).diff(this.now, 'minutes');
                    this.diff = diff;

                    if (this.form.spacing == 'double') {

                        if (this.form.level == 'High School') {
                            if (diff <= 180) {
                                this.suggestion = (32 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 180 && diff <= 360) {
                                this.suggestion = (30 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 360 && diff <= 720) {
                                this.suggestion = (28 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 720 && diff <= 1440) {
                                this.suggestion = (26 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 1440 && diff <= 2880) {
                                this.suggestion = (22 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 2880 && diff <= 5760) {
                                this.suggestion = (20 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 5760 && diff <= 14400) {
                                this.suggestion = (15 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 28000) {
                                this.suggestion = (10 * this.form.pages);
                                this.isOk = 1;
                            }
                        } else if (this.form.level == 'College') {
                            if (diff <= 180) {
                                this.suggestion = (34 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 180 && diff <= 360) {
                                this.suggestion = (32 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 360 && diff <= 720) {
                                this.suggestion = (30 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 720 && diff <= 1440) {
                                this.suggestion = (28 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 1440 && diff <= 2880) {
                                this.suggestion = (24 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 2880 && diff <= 5760) {
                                this.suggestion = (22 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 5760 && diff <= 14400) {
                                this.suggestion = (17 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 28000) {
                                this.suggestion = (12 * this.form.pages);
                                this.isOk = 1;
                            }
                        } else if (this.form.level == 'Undergraduate') {
                            if (diff <= 180) {
                                this.suggestion = (36 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 180 && diff <= 360) {
                                this.suggestion = (34 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 360 && diff <= 720) {
                                this.suggestion = (32 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 720 && diff <= 1440) {
                                this.suggestion = (30 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 1440 && diff <= 2880) {
                                this.suggestion = (26 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 2880 && diff <= 5760) {
                                this.suggestion = (24 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 5760 && diff <= 14400) {
                                this.suggestion = (19 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 28000) {
                                this.suggestion = (14 * this.form.pages);
                                this.isOk = 1;
                            }
                        } else if (this.form.level == 'Master') {
                            if (diff <= 180) {
                                this.suggestion = (38 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 180 && diff <= 360) {
                                this.suggestion = (36 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 360 && diff <= 720) {
                                this.suggestion = (34 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 720 && diff <= 1440) {
                                this.suggestion = (32 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 1440 && diff <= 2880) {
                                this.suggestion = (28 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 2880 && diff <= 5760) {
                                this.suggestion = (26 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 5760 && diff <= 14400) {
                                this.suggestion = (21 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 28000) {
                                this.suggestion = (16 * this.form.pages);
                                this.isOk = 1;
                            }
                        } else if (this.form.level == 'PhD') {
                            if (diff <= 180) {
                                this.suggestion = (40 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 180 && diff <= 360) {
                                this.suggestion = (38 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 360 && diff <= 720) {
                                this.suggestion = (36 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 720 && diff <= 1440) {
                                this.suggestion = (34 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 1440 && diff <= 2880) {
                                this.suggestion = (30 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 2880 && diff <= 5760) {
                                this.suggestion = (28 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 5760 && diff <= 14400) {
                                this.suggestion = (23 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 28000) {
                                this.suggestion = (18 * this.form.pages);
                                this.isOk = 1;
                            }
                        }

                    } else if (this.form.spacing == 'single') {
                        if (this.form.level == 'High School') {
                            if (diff <= 180) {
                                this.suggestion = (64 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 180 && diff <= 360) {
                                this.suggestion = (60 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 360 && diff <= 720) {
                                this.suggestion = (56 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 720 && diff <= 1440) {
                                this.suggestion = (52 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 1440 && diff <= 2880) {
                                this.suggestion = (44 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 2880 && diff <= 5760) {
                                this.suggestion = (40 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 5760 && diff <= 14400) {
                                this.suggestion = (30 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 28000) {
                                this.suggestion = (20 * this.form.pages);
                                this.isOk = 1;
                            }
                        } else if (this.form.level == 'College') {
                            if (diff <= 180) {
                                this.suggestion = (68 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 180 && diff <= 360) {
                                this.suggestion = (64 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 360 && diff <= 720) {
                                this.suggestion = (60 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 720 && diff <= 1440) {
                                this.suggestion = (56 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 1440 && diff <= 2880) {
                                this.suggestion = (48 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 2880 && diff <= 5760) {
                                this.suggestion = (44 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 5760 && diff <= 14400) {
                                this.suggestion = (34 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 28000) {
                                this.suggestion = (24 * this.form.pages);
                                this.isOk = 1;
                            }
                        } else if (this.form.level == 'Undergraduate') {
                            if (diff <= 180) {
                                this.suggestion = (72 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 180 && diff <= 360) {
                                this.suggestion = (68 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 360 && diff <= 720) {
                                this.suggestion = (64 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 720 && diff <= 1440) {
                                this.suggestion = (60 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 1440 && diff <= 2880) {
                                this.suggestion = (52 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 2880 && diff <= 5760) {
                                this.suggestion = (48 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 5760 && diff <= 14400) {
                                this.suggestion = (38 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 28000) {
                                this.suggestion = (28 * this.form.pages);
                                this.isOk = 1;
                            }
                        } else if (this.form.level == 'Master') {
                            if (diff <= 180) {
                                this.suggestion = (76 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 180 && diff <= 360) {
                                this.suggestion = (72 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 360 && diff <= 720) {
                                this.suggestion = (68 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 720 && diff <= 1440) {
                                this.suggestion = (64 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 1440 && diff <= 2880) {
                                this.suggestion = (56 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 2880 && diff <= 5760) {
                                this.suggestion = (52 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 5760 && diff <= 14400) {
                                this.suggestion = (42 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 28000) {
                                this.suggestion = (32 * this.form.pages);
                                this.isOk = 1;
                            }
                        } else if (this.form.level == 'PhD') {
                            if (diff <= 180) {
                                this.suggestion = (80 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 180 && diff <= 360) {
                                this.suggestion = (76 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 360 && diff <= 720) {
                                this.suggestion = (72 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 720 && diff <= 1440) {
                                this.suggestion = (68 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 1440 && diff <= 2880) {
                                this.suggestion = (60 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 2880 && diff <= 5760) {
                                this.suggestion = (56 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 5760 && diff <= 14400) {
                                this.suggestion = (46 * this.form.pages);
                                this.isOk = 1;
                            } else if (diff > 28000) {
                                this.suggestion = (36 * this.form.pages);
                                this.isOk = 1;
                            }
                        }
                    }
                }

            },
            submit() {
                this.getDiff();
                this.state = true;
                for (let i = 0; i < this.attachments.length; i++) {
                    this.formf.append('files[]', this.attachments[i]);
                }
                this.formf.append('title', this.form.title);
                this.formf.append('level', this.form.level);
                this.formf.append('subject', this.form.subject);
                this.formf.append('other_subject', this.form.other_subject);
                this.formf.append('type', this.form.type);
                this.formf.append('pages', this.form.pages);
                this.formf.append('spacing', this.form.spacing);
                this.formf.append('date', moment(this.form.date).format('YYYY-MM-DD HH:mm:ss'));
                this.formf.append('time', this.form.time);
                this.formf.append('task', this.form.task);
                this.formf.append('budget', this.form.budget);
                this.formf.append('suggested', this.suggestion);
                this.formf.append('w_format', this.form.format);

                const config = {headers: {'Content-Type': 'multipart/form-data'}};

                axios.post('/api/post-task', this.formf, config).then(response => {
                    $('#TaskModal').modal('hide');
                    this.isOk = 0;
                    this.suggestion = 0;
                    $("#files").val('');
                    this.form.reset();
                    this.attachments = [];
                    this.state = false;
                    swal.fire({
                        type: 'success',
                        title: 'Submited!!',
                        text: 'Successfully',

                    })

                })
                    .catch(response => {
                        //error
                    });


            },
            fieldChange(e) {
                let selectedFiles = e.target.files;
                if (!selectedFiles.length) {
                    return false;
                }
                for (let i = 0; i < selectedFiles.length; i++) {
                    this.attachments.push(selectedFiles[i]);
                }
                console.log(this.attachments);
            }
        },
        created() {
            this.getLevels();
            this.loadDocuments();
            this.loadSubjects();
        }
    }
</script>
