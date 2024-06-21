new Vue({
    el: '#content',
    data: {
      requestIsLoading: false,
      isLoading: false,
      currentStep: 1,
      selectedMethod: {},
      allUser: [],
      fund:{
        amount:'',
        id:'',
      },
      url: {
        fund_account: '',
        delete_account:'',
      },
    },
    
    mounted() {
    //   this.paymentMethods = JSON.parse($("#paymentMethod").val());
      this.url.fund_account = $("#processFund").val();
      this.url.delete_account = $("#deleteAccount").val();
      
      this.allUser = JSON.parse($("#allUser").val());

    },

    methods: {
     
        selectedUser(index){
            this.fund.id =  this.allUser[index].id
        },

        fundAccount(){
          
            if (this.fund.amount == 0) {
                this.$notify({
                    title: 'Error',
                    message: 'Please Enter a valid Amount.',
                    type: 'error',
                })
                return;
            }

            let formData = new FormData();
            for ( var key in this.fund ) {
                let value = this.fund[key];
                formData.append(key, value);
            }
            formData.append('id', this.fund.id);
            formData.append('_token', $('input[name=_token]').val());
            this.isLoading = true;
         
            axios.post(this.url.fund_account, formData)
            .then((response) => {
                var data = response.data
               // console.log(data);
               
                this.isLoading = false;
                this.$notify({
                    title: 'Success',
                    message: 'successfully',
                    type: 'success'
                });
                // window.location.replace(data.url);

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
        },

        deleteUserAccount(){

            let formData = new FormData();
            // for ( var key in this.fund ) {
            //     let value = this.fund[key];
            //     formData.append(key, value);
            // }
            formData.append('id', this.fund.id);
            formData.append('_token', $('input[name=_token]').val());
            this.isLoading = true;
         
            axios.post(this.url.delete_account, formData)
            .then((response) => {
                var data = response.data
               // console.log(data);
               
                this.isLoading = false;
                this.$notify({
                    title: 'Success',
                    message: 'successfully',
                    type: 'success'
                });
                // window.location.replace(data.url);

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
  