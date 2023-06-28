//const sidebar = document.querySelector('#sidebar');
//const content = document.querySelector('.content-data');

class Panel extends HTMLElement{
    
    constructor(){
        super();
    }
    
    static get observeAttributes(){
        return []
    }
    
    attributeChangeCallback(nameAtr,oldValue,newValue){
        //switch (nameAtr)
    }
    
    connectedCallback(){
        this.innerHTML = `
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        `; 
    }
}

window.customElements.define("panel-Control",Panel);