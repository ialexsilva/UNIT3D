export default {
  data() {
    return {
      auth: {},
      statuses: [],
      status: 0,
    }
  },
  computed: {
    statusColor () {
      if (this.statuses.length > 0) {
        let i = _.findIndex(this.statuses, (o) => {
          return o.id === this.status
        })

        return this.statuses[i].color
      }

      return ''
    }
  },
  watch: {
    statuses () {
      this.changeStatus(this.auth.chat_status.id)
    },
  },
  methods: {
    fetchStatuses () {
      axios.get('/api/chat/statuses').then(response => {
        this.statuses = response.data
      })
    },

    changeStatus (status_id) {
      this.status = status_id
      this.showStatuses = false

      if (this.auth.chat_status.id !== status_id) {

        /* Update the users chat status in the database */
        axios.post(`/api/chat/user/${this.auth.id}/status`, {
          'status_id': status_id
        }).then(response => {
          // reassign the auth variable to the response data
          this.auth = response.data

          /* Add system message */
          this.createMessage(
            `[url=/${this.auth.username}.${this.auth.id}]${this.auth.username}[/url] has updated their status to [b]${this.auth.chat_status.name}[/b]`
          )

        })
      }
    },
  }
}