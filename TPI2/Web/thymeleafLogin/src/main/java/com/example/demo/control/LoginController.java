package com.example.demo.control;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

import com.example.demo.loginform.LoginForm;

@Controller
public class LoginController {
 //to get login page
 private Sistema sistema = Sistema.obtenerSistema();
 
 @RequestMapping(value = "/login", method = RequestMethod.GET)
 public String getLoginForm() {
  return "login";
 }

 @RequestMapping(value="/login", method = RequestMethod.POST)
 public String login(@ModelAttribute("loginForm")LoginForm loginForm, Model model) {
  boolean validado = false;
  String nombreUser=loginForm.getUsername();
  String contra = loginForm.getPassword();
  Usuario usuarioEncontrado = sistema.getUsuario(nombreUser);
  if (usuarioEncontrado != null) {
	  String usuario = usuarioEncontrado.getUsuario();
	  String contraLista = usuarioEncontrado.getPass();
	  if(usuario.equals(nombreUser)&& contraLista.equals(contra)) {   
		  validado = true; 
		  return "home";
		  }
  }
  if (validado) {
	  return "home";
  }
  
  model.addAttribute("invalidCredentials", true);
  
  return "login";
 }
}