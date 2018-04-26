<template>
    <div class="report-modal">
        <div class="modal fade" id="report-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <button @click="close()" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Report {{ reportType }}:</h4>
                    </div>

                    <div class="modal-body">

                        <div class="form-group">

                            <label for="name" class="col-sm-2 control-label">{{subject}}</label>

                            <div class="col-sm-10">
                                <input id="name" name="name" v-model="frmData.subject">
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Report</label>
                            <div class="col-sm-10">

                                <textarea class="form-control"
                                          rows="5"
                                          cols="50"
                                          name="message"
                                          id="message"
                                          v-model="frmData.message">

                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button @click="postReport()" class="btn btn-danger"></button>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button @click="close()" class="btn btn-sm btn-default">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>
<script>
  import Swal from 'sweetalert2'

  export default {
    name: 'report-modal',

    props: {
      reportType: {type: String, default: 'User'},
      reportedBy: {type: Number, required: true},
      reportedUser: {type: Number, required: true},
      subject: {type: String, required: true}
    },

    data () {
      return {
        /*
         * The form data that will be sent using 2 way binding
         *
         * ref: https://vuejs.org/v2/guide/forms.html
         *
         */
        frmData: {
          reporter: 0,
          reported: 0,
          subject: '',
          message: ''
        }
      }
    },

    methods: {
      close () {
        $('#report-modal').modal('hide')
      },

      postReport () {
        axios.post(this.post, this.frmData)
          .then((response) => {
            Swal({
              position: 'top-end',
              type: 'success',
              title: response.data.message,
              showConfirmButton: false,
              timer: 3500
            })
          })
          .catch((error) => {
            Swal('Oops...', error.response.data, 'error')
          })
      },
      reset () {
        this.frmData = {
          reporter: 0,
          reported: 0,
          subject: '',
          message: ''
        }
      }
    },

    created () {
      this.frmData.reporter = this.reportedBy;
      this.frmData.reported = this.reportedUser;
      this.frmData.subject = this.subject;

      // Reset frmData on close event
      $('#report-modal').on('hidden.bs.modal', function (e) {
        this.reset();
      })
    }
  }
</script>
<style lang="scss" scoped>

</style>