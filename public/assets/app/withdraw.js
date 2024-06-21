new Vue({
    el: '#content',
    data: {
      requestIsLoading: false,
      isLoading: false,
      currentStep: 1,
      selectedMethod: {},
      paymentMethods: [],
      withdraw: {
        amount: 0,
        wallet_address:''
      },
      url: {
        withdraw: '',
      },
    },
    mounted() {
      this.paymentMethods = JSON.parse($("#paymentMethod").val());
      this.url.withdraw = $("#processWithdrawal").val();
      
      this.selectedMethod = this.paymentMethods[0];
    },

    methods: {
        selectMethod(index){
            this.selectedMethod = this.paymentMethods[index];
            // console.log(this.paymentMethods[index])
        },

        nextStep(){
            if (this.withdraw.amount == 0) {
                this.$notify({
                    title: 'Error',
                    message: 'Please Enter a valid Amount.',
                    type: 'error',
                })
                return;
            }

            if (this.withdraw.wallet_address == '') {
                this.$notify({
                    title: 'Error',
                    message: 'Please Enter a valid Address.',
                    type: 'error',
                })
                return;
            }

            let selectedProject ={
                amount : this.withdraw.amount,
                wallet_address : this.withdraw.wallet_address,
                selectedMethod: this.selectedMethod,
                _token : $('input[name=_token]').val()
            }

            const customAlert = swal({
                title: 'Warning',
                text: `do you want to withdraw ${this.withdraw.amount} worth of ${this.withdraw.wallet_address} to.`,
                icon: 'warning',
                closeOnClickOutside: false,
                buttons: {
                    cancel: {
                        text: "cancel",
                        visible: true,
                        className: "",
                        closeModal: true,
                    },
                    confirm: {
                        text: "I Confirm withdrawal",
                        value: 'delete',
                        visible: true,
                        className: "btn-success",
                    }
                }
            });
            customAlert.then(value => {
                if (value == 'delete') {
                    this.isLoading = true;
                    axios.post(this.url.withdraw, {data: selectedProject})
                        .then(response => {
                            this.isLoading = false;
                           
                            this.$notify({
                                title: 'Success',
                                message: response.data.message,
                                type: 'success'
                            });

                            window.location.replace(response.data.url);


                        }).catch(error => {
                            if (error.response) {
                                this.isLoading = false;
                                this.$notify.error({
                                    title: 'Error',
                                    message: error.response.data.message
                                });
                            }
                        });

                }
            });
            this.currentStep += 1;
        },

        confirmPayment(){
            //  alert('dfgdfg');
            //  return;
            let formData = new FormData();
            for ( var key in this.selectedMethod ) {
                let value = this.selectedMethod[key];
                formData.append(key, value);
            }
            formData.append('amount', this.deposit.amount);
            formData.append('_token', $('input[name=_token]').val());
            this.isLoading = true;
         
            axios.post(this.url.deposit, formData)
            .then((response) => {
                var data = response.data
               // console.log(data);
               
                this.isLoading = false;
                this.$notify({
                    title: 'Success',
                    message: 'successfully',
                    type: 'success'
                });
                window.location.replace(data.url);

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
  