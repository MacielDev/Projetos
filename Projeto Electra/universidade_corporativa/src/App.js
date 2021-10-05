import React from 'react';
import Headers from './components/header'
import HeaderPrincipal from './components/headerPrincipal'
import BanerPrincipal from './components/banerPrincipal'
import Footer from './components/footer'
function App (props){
  return(
    <div>
        <Headers /> 
        <HeaderPrincipal />
        <BanerPrincipal />
        <Footer /> 
      </div>
  )
}
export default App
