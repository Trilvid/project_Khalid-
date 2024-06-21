new Vue({
    el: '#content',
    data: {
      requestIsLoading: false,
      isLoading: false,
      currentStep: 1,
      allWithdrawals: [],
      id:'',
      withdraw: {
        status:'Approved',
      },
      url: {
        deposit: '',
        approve_withdrawal: '',
      },
    },
    mounted() {
      this.allWithdrawals = JSON.parse($("#allWithdrawal").val());
      this.url.approve_withdrawal = $("#approveWithdrawal").val();
    },

    methods: {
        selectedUser(index){
            this.id =  this.allWithdrawals[index].id
        },
        approvePayment(){
            //  alert('dfgdfg');
            //  return;
            let formData = new FormData();
            for ( var key in this.withdraw ) {
                let value = this.withdraw[key];
                formData.append(key, value);
            }
            formData.append('id', this.id);
            formData.append('_token', $('input[name=_token]').val());
            this.isLoading = true;
         
            axios.post(this.url.approve_withdrawal, formData)
            .then((response) => {
                // var data = response.data.results
               // console.log(data);
               
                this.isLoading = false;
                this.$notify({
                    title: 'Success',
                    message: 'successfully',
                    type: 'success'
                });
                // let elements = document.querySelector('#loader')
                // elements.style.display = 'none'
            })
            
            .catch( (error) => {
                let errorMessage = 'oops! Unable to complete request.';
                if(error.response){
                    let messages = [];
                    if(error.response.status == 400){
                        messages = error.response.data.messages;
                    }
                    errorMessage =  error.response.data.message;
                }
                
                this.$notify({
                    title: 'Error',
                    message: errorMessage
                });
               
                
            });
        }
    },
  })
  