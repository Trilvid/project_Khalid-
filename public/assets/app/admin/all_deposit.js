new Vue({
    el: '#content',
    data: {
      requestIsLoading: false,
      isLoading: false,
      currentStep: 1,
      selectedMethod: {},
      allDeposits: [],
      deposit: {
        status: 'Approved',
      },
      url: {
        deposit: '',
        approve_deposit:'',
      },
      id: '',
    },
    mounted() {
      this.allDeposits = JSON.parse($("#allDeposit").val());
      this.url.approve_deposit = $("#approveDeposit").val();
      
    },

    methods: {
     
        selectedUser(index){
            this.id =  this.allDeposits[index].id
        },

        approveDeposit(){
           
            let formData = new FormData();
            for ( var key in this.deposit ) {
                let value = this.deposit[key];
                formData.append(key, value);
            }
            formData.append('id', this.id);
            formData.append('_token', $('input[name=_token]').val());
            this.isLoading = true;
         
            axios.post(this.url.approve_deposit, formData)
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
  