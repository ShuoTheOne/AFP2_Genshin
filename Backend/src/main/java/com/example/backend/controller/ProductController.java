package com.example.backend.controller;

import com.example.backend.controller.dto.*;
import com.example.backend.dao.BuyRepository;
import com.example.backend.dao.entity.User;
import com.example.backend.service.*;
import io.swagger.annotations.ApiOperation;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.http.MediaType;
import org.springframework.util.MultiValueMap;
import org.springframework.web.bind.annotation.*;

import javax.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.util.*;

@RestController
@RequiredArgsConstructor
@Slf4j
public class ProductController {

    private final ProductService productService;
    private final SessionService sessionService;
    private final BuyService buyService;
    @Value("${frontend.url.php}")
    private String frontEndUrl;

    @PostMapping(path = "/addproduct", consumes = {MediaType.APPLICATION_FORM_URLENCODED_VALUE})
    public void addproduct(ProductRequest productRequest, HttpServletResponse response) throws IOException {
        productService.addProduct(productRequest);
        response.sendRedirect(frontEndUrl + "/php/");
    }

    @GetMapping("/product")
    private List<ProductRequest> getAllProduct() {
        return productService.getProduct();
    }

    @PostMapping("/category")
    private List<ProductRequest> getProductsByCategory(@RequestParam MultiValueMap<String,String> paramMap){
        return productService.getProductsByCategory(paramMap.get("category").get(0));
    }

    @PostMapping("/search")
    private List<ProductRequest> getByName(@RequestBody Map<String,String> paramMap) {
        return productService.getByName(paramMap.get("name"));
    }

    @PostMapping(path ="addtocart" , consumes = {MediaType.APPLICATION_FORM_URLENCODED_VALUE})
    public void addToCart(BuyRequest buyRequest,HttpServletResponse response,
                        @CookieValue(value = "login_token",defaultValue = "invalid") String token ) throws IOException {
        User user = sessionService.getUser(token);
        buyService.addToCart(buyRequest, user);
        response.sendRedirect(frontEndUrl + "/php/index.php?P=login");
    }

    @PostMapping(path = "/addrating", consumes = {MediaType.APPLICATION_FORM_URLENCODED_VALUE})
    public void rating(RatingRequest ratingRequest,User user, HttpServletResponse response) throws IOException {
        productService.addRating(ratingRequest, user);
        response.sendRedirect(frontEndUrl + "/php/");
    }


}
