package com.example.backend.controller;

import com.example.backend.controller.dto.ProductRequest;
import com.example.backend.service.*;
import io.swagger.annotations.ApiOperation;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.util.MultiValueMap;
import org.springframework.web.bind.annotation.*;

import javax.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.util.List;

@RestController
@RequiredArgsConstructor
@Slf4j
public class ProductController {

    private final ProductService productService;
    @Value("${frontend.url.php}")
    private String frontEndUrl;

    @PostMapping("/addproduct")
    public void addproduct(@RequestParam MultiValueMap<String,String> paramMap, HttpServletResponse response) throws IOException {
        String name = paramMap.get("name").get(0);
        Integer value = Integer.parseInt(paramMap.get("value").get(0));
        String description = paramMap.get("description").get(0);
        Integer amount = Integer.parseInt(paramMap.get("amount").get(0));
        String img_url = paramMap.get("img_url").get(0);
        String category = paramMap.get("category").get(0);
        ProductRequest productRequest  = new ProductRequest(
                name,
                value,
                description,
                amount,
                img_url,
                category
        );
        productService.addProduct(productRequest);
        response.sendRedirect(frontEndUrl + "/php/");
    }

    @GetMapping("/guests")
    private List<ProductRequest> getAllProduct() {
        return productService.getProduct();
    }

}
